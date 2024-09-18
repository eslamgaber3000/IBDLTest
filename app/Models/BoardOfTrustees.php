<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardOfTrustees extends Model
{
    //
    protected $table = 'border_of_trustees' ;
    protected $fillable = ['name','bref','position','image','linked','twitter','created_at','updated_at'];
}
