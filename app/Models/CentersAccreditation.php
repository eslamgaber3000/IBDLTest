<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentersAccreditation extends Model
{
    use HasFactory;

    protected $table = 'accredited_centers_requests' ;

    protected $fillable = [
        'org_name',
        'org_email',
        'org_country',
        'org_phone',
        'org_city',
        'website',
        'tax_Reg',
        'comm_reg',
        'org_license',
        'quality_manual',
        'Accreditation',
        'type',
        'contact_name',
        'contact_email',
        'contact_title',
        'contact_phone',
        'approve',
        'updated_at',
        'created_at'
    ];

}
