<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'extract',
        'date',
        'url_photo_cover',
        'url_photo_project'];


    //Relacion de uno a muchos inversa    
        public function category(){
            return $this->belongsTo(Category::class);
        }

        public function client(){
            return $this->belongsTo(Client::class);
        }
}
