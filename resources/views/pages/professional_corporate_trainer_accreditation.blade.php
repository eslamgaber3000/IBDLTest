@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Professional Corporate Trainer Accreditation','breadcrumb'=> 'Our
Services/Professional Corporate Trainer Accreditation',
'header'=>'Our services/accreditation.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <P style="text-align: justify;font-size:1.1em">
                    IBDL Learning Group offers professional corporate trainer accreditation, designed to qualify and
                    recognize the highly skilled corporate trainers. Our accreditation provides confidence to all
                    stakeholders, showcasing your dedication to excellence in professional training and development.
                </P>
                <P style="text-align: justify" class="mt-3"> <b> Benefits</b> <br>
                <ul>
                    <li class="mb-2">
                        <b>Accreditation Certificate: </b> <br>
                        Upon successful accreditation, you will receive an internationally
                        recognized certificate with the accreditation of Missouri State University, acknowledging your
                        commitment to the highest standards of professional training.
                    </li>
                    <li class="mb-2">
                        <b> Listing and Visibility: </b> <br>
                        You will be listed on the IBDL corporate trainers platform, gaining visibility and recognition
                        within the professional training community.
                    </li>
                </ul>


                <P style="text-align: justify" class="mt-3"> <b> How to Obtain Professional Corporate Trainer
                        Accreditation:</b> <br>
                <ul>
                    <li class="mb-2">
                        <b>Stage 1: Initial Assessment</b> <br>
                        Contact IBDL and consult with one of our experienced learning and development experts. They will
                        guide
                        you through the process and help evaluate your readiness to apply for accreditation.
                    </li>
                    <li class="mb-2">
                        <b> Stage 2: Application </b> <br>
                        Complete our detailed application form, providing thorough answers to all the questions. This is
                        your
                        opportunity to showcase how you meet the criteria for professional corporate trainer
                        accreditation.
                        You'll need to demonstrate alignment with IBDL's Dimensions of Professionalism, which define the
                        standard for exceptional corporate training. Throughout this stage, your dedicated IBDL learning
                        and
                        development expert will offer guidance and support.
                    </li>
                    <li class="mb-2">
                        <b> Stage 3: Training, Examination, and Evaluation </b> <br>
                        You will attend an extensive training program followed by written exam and project evaluation.
                        Following
                        the evaluation, our experts will submit a detailed report to IBDL, including their
                        recommendation. You
                        will be promptly notified of the outcome and obtain your certificate, and when necessary,
                        provided with
                        valuable advice on areas that require further development to meet the accreditation standards.
                    </li>
                </ul>
                </P>
                <a href="{{url('pages/'.'contact_acc_team')}}" style="color:#e30618" class="fw-bold mb-2">
                    Contact the accreditation team
                </a>
                <br>
                <a style="color:#e30618" class="fw-bold" href="{{url('accredetation/'.'corporate_trainer')}}">
                    Apply Now!
                </a>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection