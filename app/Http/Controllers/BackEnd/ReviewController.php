<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(LanguageController $language)
    {
        $language->language();
        $title = "My Reviews || Dashboard";
        $reviews = Review::latest()->paginate(30);
        return view('dashboard.reviews.index', compact('title', 'reviews'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);
        Review::create([
            'user_id' => auth()->check() ? auth()->user()->id : null,
            'product_id' => $request->product_id,
            // 'parent_id' => $request->parent_id,
            'name' => $request->name,
            'email' => $request->email,
            // 'title' => $request->title,
            'text' => $request->text,
            'rating' => $request->rating,
            'status' => 'deactive',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        toast('Successfully submit your review!', 'success');
        return back()->withErrors('error');
    }
    public function review_status_update($id)
    {
        $review = Review::where('id', $id)->first();
        $new_status = $review->status == 'active' ? 'deactive' : 'active';
        $review->update([
            'status' => $new_status,
            'updated_at' => now(),
        ]);
        toast('Successfully updated status to ' . $new_status . '!', 'success');
        return back();
    }
    public function review_testimonial_update($id)
    {
        $testimonial = Review::where('id', $id)->first();
        $new_testimonial = $testimonial->testimonial == null ? 'y' : null;
        $testimonial->update([
            'testimonial' => $new_testimonial,
            'updated_at' => now(),
        ]);
        toast('Successfully updated Testimonial!', 'success');
        return back();
    }
    public function review_destroy($id)
    {
        Review::find($id)->delete();
        toast('Successfully deleted the review!', 'success');
        return back();
    }

}


