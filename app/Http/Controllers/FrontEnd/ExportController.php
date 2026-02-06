<?php

namespace App\Http\Controllers\FrontEnd;

use App;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use App\Models\Exports;
use App\Models\Listing;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = 'Export Car';
        $export_cars = Listing::where('status', 'active')->where('lang', 'bn')->latest()->paginate(6);
        return view('frontend.export.index', compact('title', 'export_cars'));
    }
}
