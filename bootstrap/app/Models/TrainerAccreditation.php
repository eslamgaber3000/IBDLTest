<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerAccreditation extends Model
{
    use HasFactory;
    protected $table = 'accredited_trainers_requests' ;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'title',
        'company',
        // 'type',
        'training_field',
        'training_hours',
        'brief',
        'country',
        'city',
        'cv',
        'updated_at',
        'created_at'
    ];



    protected function gender(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ($value == 0) ? "male" : "female",
            set: fn (string $value) => ($value == 'male') ? 0 : 1,
        );
    }
    
}
