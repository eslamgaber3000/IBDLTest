<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    use HasFactory;

    protected $table = "testimonial";

    protected $fillable = ['page','content','name','country','created_at','updated_at'] ;
}
