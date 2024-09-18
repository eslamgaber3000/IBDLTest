<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    use HasFactory;

    protected $table = 'pages_23' ;
    protected $fillable = ['slug','title','breadcrumb','header','icon','paragraph_1','created_at','updated_at'] ;


}
