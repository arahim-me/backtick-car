<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LanguageController extends Controller
{
    public function language()
    {
        if (!auth()->check()) {
            App::setLocale('ja');
        } elseif (auth()->check() && auth()->user()->lang) {
            $lang = auth()->user()->lang;
            App::setLocale($lang);
        } else {
            App::setLocale('ja');
        }
    }

}

