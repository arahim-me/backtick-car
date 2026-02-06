<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exports extends Model
{
    protected $fillable = [
        'views',
        'title',
        'slug',
        'model',
        'brand_name',
        'years',
        'condition',
        'fuel_type',
        'color',
        'description',
        'price',
        'status',
        'export_to',
        'importer',
        'posted_by',
        'image',
    ];

    public function seller(){
        return $this->belongsTo(User::class, 'user_id', 'id');
     }
}
