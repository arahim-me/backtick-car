<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'user_id',
        'status_id',
        'name',
        'email',
        'phone',
        'fax',
        'website',
        'social_media_links',
        'registration_number',
        'tax_number',
        'used_cars_license_number',
        'bank_account',
        'description',
        'logo',
        'address',
    ];
    protected $casts = [
        'phone' => 'array',
        'social_media_links' => 'array',
        'bank_account' => 'array',
        'address' => 'array',
    ];
    // User Relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
