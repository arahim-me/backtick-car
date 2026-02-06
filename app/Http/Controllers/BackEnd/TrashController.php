<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use App\Models\Listing;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = "Trash Listing || Dashboard";
        $lists = Listing::where('status', 'trash')->latest()->paginate(10);
        $lists_count = Listing::where('status', 'trash');
        return view('dashboard.trash.index', compact('lists', 'lists_count', 'title'));


    }

    public function trash_listing($id)
    {

        $status = Listing::where('id', $id)->first();

        if ($status->status == 'active' || $status->status == 'sold') {
            Listing::find($id)->update([
                'status' => 'trash',
                'updated_at' => now(),
            ]);
            toast('This Post Added to Trash Successfull!', 'warning');
            return back();
        } else {
            Listing::find($id)->update([
                'status' => 'active',
                'updated_at' => now(),
            ]);
            toast('Successfully Recycled this post into In Stock!', 'success');
            return back();
        }
    }
}
