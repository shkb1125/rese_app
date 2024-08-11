<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo('Area');
    }

    public function genre()
    {
        return $this->belongsTo('Genre');
    }

    public function reservations()
    {
        return $this->hasMany('reservation');
    }

    public function favorites()
    {
        return $this->hasMany('favorite');
    }
}
