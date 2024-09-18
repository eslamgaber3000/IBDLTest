<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders' ;
    protected $fillable = ['user_id','product_id','price ','img','date','created_at','updated_at'] ;


}
