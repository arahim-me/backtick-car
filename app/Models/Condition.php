<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = ['name', 'created_at', 'updated_at'];
    public function condition()
    {
        return $this->belongsTo(Listing::class, 'condition_id', 'id');
    }
}
