<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {

        return $this->belongsTo(\App\Models\Category::class);
    }

    public function photos() {

        return $this->hasMany(ProductPhotos::class);
    }

    public function firstPhoto() {
        return $this->photos->first();
    }

}
