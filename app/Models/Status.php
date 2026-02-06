<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name'];


    public function status()
    {
        return $this->belongsTo(User::class, 'status_id', 'id');
    }
}
