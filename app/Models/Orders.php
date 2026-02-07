<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'customer_id',
        'seller_id',
        'product_id',
        'status_id',
        'payment_method_id',
        'quantity',
    ];

    //Seller Relationship
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }
    //Customer Relationship
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }
    //Product Relationship
    public function product()
    {
        return $this->belongsTo(Listing::class, 'product_id', 'id');
    }
    //Status Relationship
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    //Payment Method Relationship
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'id');
    }

}
