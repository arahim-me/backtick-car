<?php

namespace App\Http\Controllers\FrontEnd;

use App;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use Auth;
use Illuminate\Http\Request;
use Session;

class AboutController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = 'About INTEK LLC';
        return view('frontend.about.index', compact('title'));
    }
}
