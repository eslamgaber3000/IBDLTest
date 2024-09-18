<?php

// namespace Modules\Blog\App\Models;
namespace App\Models;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'comment','user_id','article_id'
    ];
    


    public function user(){

        return $this->belongsTo(User::class,'user_id');
    }

    public function article(){

        return $this->belongsTo(Article::class,'article_id');
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'string',
        ];
    }
}
