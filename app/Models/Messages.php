<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = [
        'sender',
        'email',
        'phone',
        'subject',
        'body',
        'status',
    ];

    public function messageSender(){
        return $this-> hasOne(User::class, 'id','sender');

    }

}
