<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $fillable = ['user_id', 'post_id'];

    //Relation with users table
    public function favorites()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    //Relation with listing table
    public function favorite_cars()
    {
        return $this->belongsTo(Listing::class, 'post_id', 'id');
    }
}
