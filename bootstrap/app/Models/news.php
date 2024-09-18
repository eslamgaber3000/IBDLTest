<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];
    protected $table = 'news' ;
    protected $fillable = ['title','slug','content','img','date','meta_keywords','created_at','updated_at'] ;

}
