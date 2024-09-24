<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','desc','image','user_id','article_image','auther_id','subtitle','desc2'
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'article_id');
    }
    public function auther(){
        return $this->belongsTo(Auther::class,'auther_id');
    }
}
