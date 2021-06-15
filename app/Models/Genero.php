<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Genero extends Model
{
    use HasFactory;
    protected $table = 'genero';

    /*public function scopeName($query, $name){
        dd("scope: " . $name);
        $query->where('name' , $name);
    }*/
}
