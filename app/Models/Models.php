<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = (['brand_id', 'name']);
    public function brand()
    {
        return $this->belongsTo(Brands::class, 'brand_id', 'id');
    }

}
