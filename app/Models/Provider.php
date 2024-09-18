<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers' ;
    protected $fillable = ['provider','contact_person','phone','fax','email','website','address','img','country_id','city','created_at','updated_at'] ;



    protected function countryId(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Country::where('id',$value)->first()->short_name,
            set: fn (string $value) => Country::where('short_name',$value)->first()->id,
        );
    }
}
