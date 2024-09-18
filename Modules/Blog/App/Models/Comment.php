<?php

namespace Modules\Blog\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\factories\CommentFactory;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'comment','user_id','article_id'
    ];
    
    protected static function newFactory(): CommentFactory
    {
        //return CommentFactory::new();
    }

    public function user(){

        return $this->belongsTo(User::class,'user_id');
    }

    public function article(){

        return $this->belongsTo(Article::class,'article_id');
    }
}
