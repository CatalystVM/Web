<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Laravel\Sanctum\HasApiTokens;
use App\API\GravatarLib\Gravatar;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {
    use HasApiTokens, HasFactory, Notifiable;
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_seen',
        'dark_mode',
        'support_pin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'support_pin'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    ////////////////////////////////////////
    
    public function sessions() {
        return $this->hasMany(Session::class);
    }

    public function permissions() {
        return $this->hasMany(UserPermission::class);
    }

    ////////////////////////////////////////

    public function getNameFirstAttribute() : string {
        return explode(' ', $this->name)[0];
    }

    public function getNameLastAttribute() : string {
        return explode(' ', $this->name)[1];
    }

    ////////////////////////////////////////

    public function HasPermission(string $permission)  : bool {
        if ($permission == null) 
            return false;

        $p = Permission::where('raw', $permission)->first();
        if (!$p) 
            return false;

        foreach ($this->permissions as $perm) {
            if ($perm->permission->id == $p->id)
                return true;
        }
        return false;
    }

    public function GivePermission(Permission $permission = null)  : bool {
        if ($this->HasPermission($permission))
            return true;

        $perm = UserPermission::create([
            'user_id' => $this->id,
            'permission_id' => $permission->id
        ]);

        if ($perm) {
            $this->refresh();
            return true;
        }

        return false;
    }

    public function RemovePermission(Permission $permission = null) : bool {
        if (!$this->HasPermission($permission))
            return true;

        foreach ($this->permissions as $perm) {
            if ($perm->permission->id == $permission->id) {
                $perm->delete();
                $this->refresh();
                return true;
            }
        }

        return false;
    }

    ////////////////////////////////////////

    public function GetProfileImage() : string {
        $gravatar = new Gravatar();
        $gravatar->EnableSecureImages();
        $gravatar->SetDefaultImage('mm')->SetAvatarSize(150);
        $gravatar->SetMaxRating('pg');
        return $gravatar->Get($this->email);
    }
}
