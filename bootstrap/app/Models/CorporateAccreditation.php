<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateAccreditation extends Model
{
    use HasFactory;

    protected $table = 'accredited_corporate' ;

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
        'organizational_structure',
       'policies_procedures',
       'communication',
       'financial_management',
       'human_resources',
       'data_security',
       'quality_assurance',
       'legal_compliance',
       'risk_management',
       'ethical_standards',
       'customer_relations',
       'supply_chain_management',
       'environmental_sustainability',
       'health_safety',
       'documentation_record_keeping',
       'performance_metrics',
       'continuous_improvement',
       'training_development',
       'social_responsibility',
       'technology_adoption',
        'updated_at',
        'created_at'
    ];
}
