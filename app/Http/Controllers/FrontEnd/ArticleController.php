<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index (){
        $title = "News / Article";
        return view('frontend.article.index', compact('title'));
    }

}
