<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','desc','image','article_image','auther_id','subtitle','article_category_id','metadata','article_audio','time_to_read'
    ];


    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }


    protected $casts = [
        'metadata' => 'array',
    ];
    public function comments(){
        return $this->hasMany(Comment::class,'article_id');
    }
    public function likes()
    {
    return $this->hasMany(Like::class);
    }
    public function auther(){
        return $this->belongsTo(Auther::class,'auther_id');
    }

    public function category(){

        return $this->belongsTo(ArticleCategory::class,'article_category_id');
    }

}
