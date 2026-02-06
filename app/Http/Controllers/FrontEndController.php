<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Exports;
use App\Models\Listing;
use App\Models\Review;
use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FrontEndController extends Controller
{
    public function index(LanguageController $language)
    {
        // $lang = $language->language();
        // App::setLocale($lang);
        $language->language();
        $title = 'Home';
        $activeStatus = Status::where('name', 'active')->first();
        $categories = Categories::where('status_id', $activeStatus->id)->get();
        $export_cars = Listing::where('lang', 'bn')->latest()->paginate(6);
        $cars = Listing::where('status_id', $activeStatus->id)->where('lang', App::getLocale())->latest()->paginate(14);
        $testimonials = Review::where('testimonial', 'y')->paginate(10);
        return view('frontend.home.index', compact('cars', 'title', 'export_cars', 'testimonials', 'categories'));
    }
}


