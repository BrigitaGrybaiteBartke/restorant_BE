<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'price', 'image', 'restaurants_id'];
    protected $hidden = ['created_at', 'updated_at'];


    public function restaurant() {
        return $this->belongsTo('App\Models\Restaurant');
}

    public function rating() {
        return $this->hasMany('App\Models\Rating');
    }

}


