<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExecutiveEducation extends Model
{
    use HasFactory;

    protected $table  ='executive_education';
    protected $fillable = ['slug','title','breadcrumb','header','icon','paragraph_1','paragraph_2','logo','image','counter','intakes','hours','trainees','created_at','updated_at'] ;

}
