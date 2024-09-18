<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;


;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class=> UserPolicy::class,
        Partner::class=> PartnerPolicy::class,
        AssessmentPagesPolicy::class=> AssessmentPagesPolicy::class,
        BoardOfTrusteesPolicy::class=> BoardOfTrusteesPolicy::class,
        CentersAccreditation::class=> CentersAccreditationPolicy::class,
        contact::class=> contactPolicy::class,
        Contactus::class=> ContactusPolicy::class,
        Corporate::class=> CorporateAccreditationPolicy::class,
        ExecutiveEducation::class=> ExecutiveEducationPolicy::class,
        Homepage::class=> HomepagePolicy::class,
        news::class=> newsPolicy::class,
        pages::class=> pagesPolicy::class,
        order::class=> orderPolicy::class,
        Partner::class=> PartnerPolicy::class,
        Portfolio::class=> PortfolioPolicy::class,
        product::class=> ProductPolicy::class,
        Provide::class=> ProviderPolicy::class,
        qualification::class=> qualificationPolicy::class,
        review::class=> reviewPolicy::class,
        testimonial::class=> testimonialPolicy::class,
        TrainerAccreditation::class=> TrainerAccreditationPolicy::class,
        TrainerAccreditation::class=> TrainerAccreditationPolicy::class,
  
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
