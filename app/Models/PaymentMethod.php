<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'name',
    ];

    // Orders Relationship
    public function orders()
    {
        return $this->hasMany(Orders::class, 'payment_method_id', 'id');
    }
}
