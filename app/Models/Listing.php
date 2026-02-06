<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'user_id',
        'parent_id',
        'category_id',
        'lang',
        'views',
        'title',
        'slug',
        'model_id',
        'brand_id',
        'year',
        'condition_id',
        'stock_number',
        'vin_number',
        'mileage',
        'transmision',
        'driver_type',
        'engine_size',
        'cylinders',
        'fuel_type',
        'doors',
        'color',
        'seats',
        'tyer_type',
        'weight',
        'dimension',
        'city_mpg',
        'description',
        'features',
        'price',
        'currency',
        'location',
        'status_id',
        'thumbnail',
        'image',
        'video',
    ];

    // Seller Relationship
    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    // Category Relationship
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id')->name;
    }
    // Relation wiht brands
    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brand_id', 'id')->name;
    }
    // Relation wiht brands
    public function model()
    {
        return $this->belongsTo(Models::class, 'model_id', 'id')->name;
    }
    // Relation wiht brands
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id')->name;
    }
    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id', 'id')->name;
    }
}
