<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url_logo_client',
        'representative',
        'url_photo_representative',
        'charge',
        'status'];


        public function portfolio(){
            return $this->hasMany(Portfolio::class);
        }
}

