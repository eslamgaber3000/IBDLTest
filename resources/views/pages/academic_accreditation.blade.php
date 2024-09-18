@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Academic accreditation','breadcrumb'=> 'Home/Academic
accreditation','header'=>'Our services/accreditation.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <P style="text-align: justify;font-size:1.1em">
                    IBDL Academic Accreditation is designed to help students choose business learning to support their
                    professional business Administration careers. It recognizes universities that engage with the
                    business Administration profession and who offer modules/courses/program frameworks to students
                    which demonstrate alignment with the IBDL Body of Knowledge. Academic Accreditation assesses
                    relevant degree-based modules, courses, and program frameworks.
                </P>
                <P style="text-align: justify"> <b> Benefits</b> <br>

                <ul>
                    <li>
                        A certificate, valid for three years
                    </li>
                    <li>
                        An IBDL Accreditation logo to use on all relevant promotional material
                    </li>
                    <li>
                        A listing and link on the IBDL platform
                    </li>
                    <li>
                        A copy of the assessor’s report to use for further development of your program.
                    </li>
                    <li>
                        The experience plus qualification route to IBDL Full Membership (route 1) will be available to
                        any student who has successfully completed an accredited module or course, subject to meeting
                        any eligibility date ranges that may be applied.
                    </li>
                </ul>

                Students on accredited academic courses are eligible for free IBDL Student Membership, offering access
                to IBDL platform.

                </P>
                <p>
                    <b> How to gain accreditation </b>
                </p>
                <ul style="text-align: justify" class="mb-4">

                    <li class="mb-2">
                        <b> Stage 1 – Initial discussion</b><br>
                        Once you register your interest in accreditation a business development manager will discuss
                        your needs and your readiness to apply.
                    </li>
                    <li class="mb-2">
                        <b> Stage 2 – Completing your application</b> <br>
                        You should answer the questions in the application form as fully as possible and provide
                        relevant course materials.

                    </li>

                    <li class="mb-2">
                        <b> Stage 3 – The assessment</b><br>
                        Your application will be sent to an assessor who will assess whether it meets the requirements
                        of
                        accreditation. An online ‘site visit’ will be arranged to clarify any outstanding issues.

                    </li>

                    <li class="mb-2">
                        <b>Stage 4 – Assessment decision</b><br>
                        Our assessor will complete a report, making recommendations to IBDL. We will inform you promptly
                        of
                        the outcome. You will receive a copy of the report and advice on areas that require development
                        in
                        order to meet the standards of accreditation, if necessary.

                    </li>
                    <li class="mb-2">
                        <b> Stage 5 - Re-assessment</b><br>
                        If your application is unsuccessful you will be provided with the assessor's report plus advice
                        on
                        areas requiring development. You may re-submit at any time. This will be treated as a new
                        submission.
                    </li>
                    <li class="mb-2">
                        <b> Stage 6 – Annual renewal</b><br>
                        On the anniversary of your accreditation, you will be sent an annual report template and invoice
                        and
                        be asked to confirm that the standards recognized through your initial assessment have been
                        maintained. On the third anniversary of your assessment, you will be invited to go through a
                        full
                        re-assessment.
                    </li>
                </ul>
                <b>Ready for academic accreditation?</b> <br>
                <a href="{{url('pages/'.'contact_acc_team')}}" style="color:#e30618" class="fw-bold mb-2">
                    Contact the accreditation team
                </a>
                <br>
                <a style="color:#e30618" class="fw-bold" href="{{url('accredetation/academic_accreditation')}}">
                    Apply Now!
                </a>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>


@endsection