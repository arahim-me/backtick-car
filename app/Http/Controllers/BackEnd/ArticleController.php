<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = 'Article';
        return view('dashboard.article.index', compact('title'));
    }
}
