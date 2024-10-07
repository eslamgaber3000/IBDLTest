<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ArticleCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug' ,'description'];

        public function articles(){
            return $this->hasMany(Article::class);
        }


        public static function boot(){

            Parent::boot();

            static::creating(function ($category){
                $category->slug=Str::slug($category->name);

            });


            static::updating(function ($category) {
               $category->slug=Str::slug($category->name); 
            });
        }
}
