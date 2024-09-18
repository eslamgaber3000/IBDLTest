@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Professional Course Accreditation','breadcrumb'=> 'Our Services/Professional Course
Accreditation','header'=>'Our services/accreditation.jpg','icon'=>'services.png'])
<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <P style="text-align: justify;font-size:1.1em">
                    IBDL Professional Course Accreditation is designed to help learners choose the best course in
                    support of their professional project management career. Professional Course Accreditation
                    identifies those courses which are aligned to the IBDL Body of Knowledge, but do not lead to, or
                    cover the syllabus of, formal IBDL professional qualification.
                </P>
                <P style="text-align: justify"> <b> Benefits</b> <br>

                <ul>
                    <li>
                        increased credibility for course/s by being accredited by IBDL ;

                    </li>
                    <li>
                        recognition that IBDL-accredited professional courses support IBDL professional advocacy via
                        the business Administration standard Dimensions of Professionalism;

                    </li>
                    <li>
                        recognition to end-users of the training providers’ support of IBDL professional advocacy
                        model;

                    </li>
                    <li>
                        recognition and awareness of training to support improved business Administration delivery
                        capability;

                    </li>
                    <li>
                        a reference point for corporate institutions to inform their choice of training courses.

                    </li>
                </ul>

                </P>
                <p>
                    For IBDL Professional Course Accreditation, only those courses that have a significant element of
                    business Administration skills that can be mapped to IBDL Body of Knowledge will receive
                    accreditation. Courses and course delivery will also be evaluated to identify how they support IBDL
                    advocacy via the business Administration standard Dimensions of Professionalism. IBDL Professional
                    Course Accreditation is only available to IBDL Accredited Providers.
                </p>

                <b>Ready for professional accreditation?</b> <br>
                <a href="{{url('pages/'.'contact_acc_team')}}" style="color:#e30618" class="fw-bold mb-2">
                    Contact the accreditation team
                </a>
                <br>
                <!--<a style="color:#e30618" class="fw-bold" href="{{url('accredetation/professional_course')}}">-->
                <!--    Apply Now!-->
                <!--</a>-->
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>

@endsection