<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'user_id',
        'store_name',
        'store_email',
        'store_phone',
        'store_fax',
        'store_website',
        'store_social_media_links',
        'store_registration_number',
        'store_tax_number',
        'store_used_cars_license_number',
        'store_bank_account_number',
        'store_description',
        'store_logo',
        'store_address',
    ];
    // User Relationship
}
