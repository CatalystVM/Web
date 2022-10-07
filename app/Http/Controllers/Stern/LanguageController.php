<?php

namespace App\Http\Controllers\Stern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  array $locale
     * @return \Illuminate\Http\Response
     */
    public function index($locale) {
        $availLocale = [ 
            'en'=>'en',
            'fr'=>'fr',
            'de'=>'de',
            'pt'=>'pt',
        ];
        
        if (array_key_exists($locale, $availLocale))
            session()->put('locale', $locale);

        return redirect()->back();
    }

}