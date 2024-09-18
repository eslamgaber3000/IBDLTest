<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $table = 'reviews' ;
    protected $fillable = ['user_id','approved','title','subject','rate','date','created_at','updated_at'] ;

    public function user()
    {
        return  $this->belongsTo(User::class, 'user_id');
    }

}
