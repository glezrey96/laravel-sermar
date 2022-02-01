<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'name',
        'icon',
        'description'];


    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion de uno a muchos

    public function portfolio(){
        return $this->hasMany(Portfolio::class);
    }
}
