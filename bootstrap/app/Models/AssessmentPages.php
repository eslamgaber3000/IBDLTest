<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentPages extends Model
{
    use HasFactory;

    protected $table = 'assessment_pages' ;
    protected $fillable = ['slug','title','breadcrumb','header','icon','text_1','text_2','logo','flyer_ar','flyer_en','flyer_fr','image','created_at','updated_at'] ;


}
