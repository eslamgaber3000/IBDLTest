<?php

namespace Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\factories\ArticleFactory;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title','desc','image','user_id'
    ];
    
    protected static function newFactory(): ArticleFactory
    {
        //return ArticleFactory::new();
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
   
}
