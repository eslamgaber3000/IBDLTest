<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomTraining extends Model
{
    use HasFactory;

    protected $table = 'custom_training' ;

    protected $fillable = [
        'name',
        'title',
        'email',
        'phone',
        'department',
        'division',
        'audience',
        'completion_date',
        'audience_size',
        'preferred_sessions',
        'focus_area',
        'description',
        'outcome',
        'additional_info',
        'updated_at',
        'created_at'
    ];
}
