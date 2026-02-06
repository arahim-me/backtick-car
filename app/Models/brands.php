<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $fillable = ['name'];

    // Relation with user by Brands
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
    // Relation with model
    public function model()
    {
        return $this->belongsTo(Models::class, 'brand_id', 'id');
    }
}
