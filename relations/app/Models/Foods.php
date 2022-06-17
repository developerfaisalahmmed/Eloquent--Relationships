<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;

//    public function foodCategories()
//    {
//        return $this->hasManyThrough(Deployment::class, Environment::class);
//    }

    public function allergies()
    {
        return $this->belongsToMany(Allergies::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
