<?php

namespace App\API\GravatarLib;

use \InvalidArgumentException;

class Gravatar {

	/**
	 * @var integer - The size to use for avatars.
	 */
	protected $size = 80;

	/**
	 * @var mixed - The default image to use - either a string of the gravatar-recognized default image "type" to use, a URL, or false if using the...default gravatar default image (hah)
	 */
	protected $default_image = false;

	/**
	 * @var string - The maximum rating to allow for the avatar.
	 */
	protected $max_rating = 'g';

	/**
	 * @var boolean - Should we use the secure (HTTPS) URL base?
	 */
	protected $use_secure_url = false;

	/**
	 * @var string - A temporary internal cache of the URL parameters to use.
	 */
	protected $param_cache = NULL;

	/**
	 * Get the currently set avatar size.
	 * @return integer - The current avatar size in use.
	 */
	public function GetAvatarSize() {
		return $this->size;
	}

	/**
	 * Set the avatar size to use.
	 * @param integer $size - The avatar size to use, must be less than 512 and greater than 0.
	 * @return Gravatar - Provides a fluent interface.
	 *
	 * @throws \InvalidArgumentException
	 */
	public function SetAvatarSize($size) {
		// Wipe out the param cache.
		$this->param_cache = NULL;

		if (!is_int($size) && !ctype_digit($size)) {
			throw new InvalidArgumentException('Avatar size specified must be an integer');
		}

		$this->size = (int) $size;

		if ($this->size > 512 || $this->size < 0) {
			throw new InvalidArgumentException('Avatar size must be within 0 pixels and 512 pixels');
		}

		return $this;
	}

	/**
	 * Get the current default image setting.
	 * @return mixed - False if no default image set, string if one is set.
	 */
	public function GetDefaultImage() {
		return $this->default_image;
	}

	/**
	 * Set the default image to use for avatars.
	 * @param mixed $image - The default image to use. Use boolean false for the gravatar default, a string containing a valid image URL, or a string specifying a recognized gravatar "default".
	 * @return Gravatar - Provides a fluent interface.
	 *
	 * @throws \InvalidArgumentException
	 */
	public function SetDefaultImage($image) {
		// Quick check against boolean false.
		if ($image === false) {
			$this->default_image = false;

			return $this;
		}

		// Wipe out the param cache.
		$this->param_cache = NULL;

		// Check $image against recognized gravatar "defaults", and if it doesn't match any of those we need to see if it is a valid URL.
		$_image = strtolower($image);
		$valid_defaults = array('404' => 1, 'mm' => 1, 'identicon' => 1, 'monsterid' => 1, 'wavatar' => 1, 'retro' => 1);
		if (!isset($valid_defaults[$_image])) {
			if (!filter_var($image, FILTER_VALIDATE_URL)) {
				throw new InvalidArgumentException('The default image specified is not a recognized gravatar "default" and is not a valid URL');
			} else {
				$this->default_image = rawurlencode($image);
			}
		} else {
			$this->default_image = $_image;
		}

		return $this;
	}

	/**
	 * Get the current maximum allowed rating for avatars.
	 * @return string - The string representing the current maximum allowed rating ('g', 'pg', 'r', 'x').
	 */
	public function GetMaxRating() {
		return $this->max_rating;
	}

	/**
	 * Set the maximum allowed rating for avatars.
	 * @param string $rating - The maximum rating to use for avatars ('g', 'pg', 'r', 'x').
	 * @return Gravatar - Provides a fluent interface.
	 *
	 * @throws \InvalidArgumentException
	 */
	public function SetMaxRating($rating) {
		// Wipe out the param cache.
		$this->param_cache = NULL;

		$rating = strtolower($rating);
		$valid_ratings = array('g' => 1, 'pg' => 1, 'r' => 1, 'x' => 1);
		if (!isset($valid_ratings[$rating])) {
			throw new InvalidArgumentException(sprintf('Invalid rating "%s" specified, only "g", "pg", "r", or "x" are allowed to be used.', $rating));
		}

		$this->max_rating = $rating;

		return $this;
	}

	/**
	 * Check if we are using the secure protocol for the image URLs.
	 * @return boolean - Are we supposed to use the secure protocol?
	 */
	public function UsingSecureImages() {
		return $this->use_secure_url;
	}

	/**
	 * Enable the use of the secure protocol for image URLs.
	 * @return Gravatar - Provides a fluent interface.
	 */
	public function EnableSecureImages() {
		$this->use_secure_url = true;

		return $this;
	}

	/**
	 * Disable the use of the secure protocol for image URLs.
	 * @return Gravatar - Provides a fluent interface.
	 */
	public function DisableSecureImages() {
		$this->use_secure_url = false;

		return $this;
	}

	/**
	 * Build the avatar URL based on the provided email address.
	 * @param string $email - The email to get the gravatar for.
	 * @param string $hash_email - Should we hash the $email variable?  (Useful if the email address has a hash stored already)
	 * @return string - The XHTML-safe URL to the gravatar.
	 */
	public function BuildGravatarURL($email, $hash_email = true) {
		// Start building the URL, and deciding if we're doing this via HTTPS or HTTP.
		if ($this->UsingSecureImages()) {
			$url = 'https://secure.gravatar.com/avatar/';
		} else {
			$url = 'http://www.gravatar.com/avatar/';
		}

		// Tack the email hash onto the end.
		if ($hash_email == true && !empty($email)) {
			$url .= $this->GetEmailHash($email);
		} elseif (!empty($email)) {
			$url .= $email;
		} else {
			$url .= str_repeat('0', 32);
		}

		// Check to see if the param_cache property has been populated yet
		if ($this->param_cache === NULL) {
			// Time to figure out our request params
			$params = array();
			$params[] = 's=' . $this->GetAvatarSize();
			$params[] = 'r=' . $this->GetMaxRating();
			if ($this->GetDefaultImage()) {
				$params[] = 'd=' . $this->GetDefaultImage();
			}

			// Stuff the request params into the param_cache property for later reuse
			$this->params_cache = (!empty($params)) ? '?' . implode('&amp;', $params) : '';
		}

		// Handle "null" gravatar requests.
		$tail = '';
		if (empty($email)) {
			$tail = !empty($this->params_cache) ? '&amp;f=y' : '?f=y';
		}

		// And we're done.
		return $url . $this->params_cache . $tail;
	}

	/**
	 * Get the email hash to use (after cleaning the string).
	 * @param string $email - The email to get the hash for.
	 * @return string - The hashed form of the email, post cleaning.
	 */
	public function GetEmailHash($email) {
		return hash('md5', strtolower(trim($email)));
	}

	/**
	 * @see Gravatar::BuildGravatarURL()
	 */
	public function Get($email, $hash_email = true) {
		// Just an alias.  Makes it easy to use this as a twig asset.
		return $this->BuildGravatarURL($email, $hash_email);
	}
}
