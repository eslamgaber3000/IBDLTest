@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Training provider accreditation','breadcrumb'=> 'Our Services/Training provider
accreditation','header'=>'Our services/accreditation.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <P style="text-align: justify;font-size:1.1em">
                    Training providers that achieve accreditation demonstrate their ability to deliver our
                    qualifications at a superior level, ensuring candidates receive an exceptional learning experience
                    during their exam preparation. We maintain a close collaboration with our accredited providers,
                    sharing best practices and the latest guidance, which they, in turn, impart to their candidates,
                    positioning them for success.
                </P>
                <P style="text-align: justify"> <b> Benefits</b> <br>
                    The demand for IBDL professional qualifications is substantial across various professions, and your
                    accreditation serves as an assurance to those seeking it that your organization upholds the highest
                    standards in training, exam preparation, and delivery. By obtaining accreditation, you gain the
                    right to use our endorsement, leveraging our name and reputation. We work collaboratively to ensure
                    a mutually beneficial alignment, offering ongoing training, audits, and guidance to keep you updated
                    with the latest advice and methodologies. Additionally, you'll have access to our exam booking
                    system, facilitating a seamless learner journey from start to finish.
                </P>
                <p>
                    <b>
                        Who can be a Training Provider?
                    </b>
                    <br>
                    Any organization that meets certain criteria and wishes to provide IBDL professional qualifications
                    can become a Training Provider. They may include the following:
                <ul>
                    <li>Training organizations</li>
                    <li>Colleges and universities</li>
                    <li>Government agencies </li>
                </ul>
                </p>
                <p>
                    <b> How to Attain Training Provider Accreditation </b>
                </p>
                <ul style="text-align: justify" class="mb-4">
                    <li> <b> Stage 1 </b> <br>
                        Initiate contact with IBDL and consult with one of our business development managers. They will
                        assist you in evaluating your readiness for the application.
                    </li>
                    <br>
                    <li> <b> Stage 2 </b> <br>
                        Complete our application form comprehensively, outlining how your organization aligns with the
                        Accredited Training Provider Standard.
                    </li>
                    <br>
                    <li> <b> Stage 3 </b> <br>
                        Undergo a desk assessment of your application by our assessor, followed by an interview. A
                        report, along with the assessor’s recommendation, will be submitted to IBDL, and you will be
                        promptly informed of the outcome. If necessary, you will receive advice on areas that require
                        development to meet the accredited training provider standard.
                    </li>
                    <br>
                    <li> <b> Stage 4 </b> <br>
                        On the anniversary of your accreditation, submit an annual report demonstrating your commitment
                        to continuous improvement in delivering IBDL qualifications.
                    </li>
                </ul>
                <br>
                <p>
                    <b style="color:#e30618"> Become Training Providers
                    </b>
                    <br>
                    Simply complete the online application, and we will initiate the qualifying process. Note: a
                    separate application is required for each training location.

                </p>
                <a href="{{url('pages/'.'contact_acc_team')}}" style="color:#e30618" class="fw-bold mb-2">
                    Contact the accreditation team
                </a>
                <br>
                <a style="color:#e30618" class="fw-bold" href="{{url('accredetation/training_provider')}}">
                    Apply Now!
                </a>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>

@endsection






<P style="text-align: justify;font-size:1.1em"> Accredited Providers have proven they deliver our qualifications to a
    high standard, ensuring candidates receive the best experience while studying for their exams. We work closely with
    our Accredited Providers, sharing best practices and the latest advice which they pass on to their candidates,
    putting them in good stead for success. </P>
<P style="text-align: justify"> <b> Benefits</b> <br> There is a high demand for IBDL professional qualifications from
    across the profession and your accreditation signals to those seeking it that your organization will offer the
    highest possible standard of training, exam preparation, and delivery. <br> By gaining accreditation, you have the
    right to use our signifier that carries our name and reputation and we’ll work closely with you to ensure both you
    and IBDL benefit from that alignment. <br> This includes ongoing training, audits, and guidance to keep you to speed
    with the latest advice and ways of working; you’ll also gain access to our exam booking system to ensure a smooth
    learner journey from start to finish. </P>
<p> <b> How to gain training provider accreditation </b> </p>
<ul style="text-align: justify" class="mb-4">
    <li> <b> Stage 1 </b> <br> Contact IBDL and talk to one of our business development managers. They will help you
        evaluate your readiness to apply. </li> <br>
    <li> <b> Stage 2 </b> <br> To apply, you will need to complete our application form, answering the questions as
        fully as possible. Here you will explain how your organization meets the Accredited Training Provider Standard.
    </li> <br>
    <li> <b> Stage 3 </b> <br> Our assessor will conduct a desk assessment of your application and arrange an interview
        with you. A report will then be issued to IBDL with the assessor’s recommendation and we will inform you
        promptly of the outcome. You will receive a copy of the report and advice on areas that require development in
        order to meet the accredited training provider standard, if necessary. </li> <br>
    <li> <b> Stage 4 </b> <br> On the anniversary of your accreditation, you will be required to complete an annual
        submission to demonstrate your continuous improvement approach to delivering IBDL qualifications. </li>
</ul> <a href="https://ibdl.net/pages/contact_acc_team" style="color:#e30618" class="fw-bold mb-2"> Contact the
    accreditation team </a> <br> <a style="color:#e30618" class="fw-bold"
    href="https://ibdl.net/accredetation/training_provider"> Apply Now! </a>