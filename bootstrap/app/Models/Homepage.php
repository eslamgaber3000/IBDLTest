<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Homepage extends Model
{
    protected $table = 'homepage' ;
    protected $fillable = ['inspire','brief','credential','mission','goals','services','professional_solutions',
    'professional_solutions_1','professional_solutions_2','professional_solutions_3',
    'professional_solutions_4','professional_solutions_5','professional_solutions_6','created_at','updated_at'] ;

}
