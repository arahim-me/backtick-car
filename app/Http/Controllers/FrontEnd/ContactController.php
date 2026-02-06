<?php

namespace App\Http\Controllers\FrontEnd;

use App;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = 'Contact';
        return view('frontend.contact.index', compact('title'));
    }
}
