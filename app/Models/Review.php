<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'parent_id',
        'testimonial',
        'name',
        'email',
        'title',
        'text',
        'rating',
        'status'
    ];

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Listing::class, 'product_id', 'id');
    }
}
