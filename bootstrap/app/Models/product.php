<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    
    protected $table = 'products' ;
    protected $fillable = ['title','description','training_materials','img','table_of_contents','obtain','price','africe_price','gulf_price','egy_price','created_at','updated_at','product_link'] ;


}
