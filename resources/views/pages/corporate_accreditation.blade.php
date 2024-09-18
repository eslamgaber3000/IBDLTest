@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Corporate accreditation','breadcrumb'=> 'Our Services/Corporate
accreditation','header'=>'Our services/accreditation.jpg','icon'=>'services.png'])



<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <P style="text-align: justify;font-size:1.1em">
                    Corporate Accreditation by IBDL learning group assesses an organization’s professional development
                    scheme, providing confidence to all stakeholders in its dedication to developing business
                    Administration professionals.
                </P>
                <P style="text-align: justify"> <b> Benefits</b> <br>


                    A certificate, valid for three years. An IBDL Accreditation logo to use on all relevant promotional
                    material. A listing and link on the IBDL platform. A copy of the assessor’s report, to use for
                    further development of your program.

                </P>
                <p>
                    <b> How to gain corporate accreditation </b>
                </p>
                <ul style="text-align: justify" class="mb-4">
                    <li> <b> Stage 1 </b> <br>
                        Contact IBDL and talk to one of our business development managers about our scheme. They will
                        help you evaluate your readiness to apply.
                    </li>
                    <br>
                    <li> <b> Stage 2 </b> <br>
                        To apply, you will need to complete our application form, answering the questions as fully as
                        possible. Here you will explain how your organization meets the criteria for accreditation.
                        <br>
                        In particular, our Assessors will look for evidence of your organization’s commitment to the
                        IBDL business Administration standard Dimensions of Professionalism. A full set of guidance
                        notes is provided and you will also have the support of your IBDL business development manager
                        throughout.
                    </li>
                    <br>
                    <li> <b> Stage 3 </b> <br>
                        Our assessor will conduct a desk assessment of your application and a site visit will normally
                        be arranged. A report will then be issued to IBDL with the Assessor’s recommendation and we will
                        inform you promptly of the outcome. You will receive a copy of the report and advice on areas
                        that require development in order to meet the standards of accreditation, if necessary.
                    </li>

                </ul>
                <b style="color:#e30618">Looking for Corporate Partnership Programme? </b> <br>

                <p> <b> Ready for corporate accreditation? </b></p>

                <a href="{{url('pages/'.'contact_acc_team')}}" style="color:#e30618" class="fw-bold mb-2">
                    Contact the accreditation team
                </a>
                <br>
                <a style="color:#e30618" class="fw-bold" href="{{url('accredetation/corporate_accreditation')}}">
                    Apply Now!
                </a>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>

@endsection