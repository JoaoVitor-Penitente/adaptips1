<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title','genre','release','synopsis','rating','image','country_id'];

    public function movie()
{
    return $this->hasOne(Country::class,'id');
}
}

