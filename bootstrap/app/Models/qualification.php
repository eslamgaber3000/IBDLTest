<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qualification extends Model
{
    use HasFactory;
    protected $table  ='qualifications';
    protected $fillable = ['slug','title','breadcrumb','header','icon','paragraph_1','paragraph_2','logo','certificate','en_flyer','ar_flyer','fr_flyer','created_at','updated_at'] ;


}
