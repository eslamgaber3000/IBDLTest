@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'IBDL Professional','breadcrumb'=> 'Our Products/IBDL
Professional','header'=>'Our products/qulifications.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main d-flex">
                    <div style="align-self: center"
                        class="col-lg-12 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-1 order-1 ">
                        <p>
                            IBDL Professional is your powerful tool to develop the skills and knowledge that will help
                            you to move along your professional career. IBDL Professional enables organizations to
                            prepare second-line leaders and managers through developing their management skills, which
                            enable them to lead their organizations efficiently.Specially designed in an interactive and
                            enjoyable way, in which you move from studying the management skills, through understanding
                            the basics of planning and strategic management, providing you with the knowledge and skills
                            you need to grow on the personal and professional levels and invest in your future.

                        </p>
                    </div>
                    <div style="align-self: center"
                        class="col-lg-6 mx-auto mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-0 order-0">
                        <div class="cert-img col-lg-12 col-7">
                            <img src="../../images/certs/Professional.png" width="100%" height="auto" alt="">
                        </div>
                        <div class="cert-flyer col-12">
                            <p class="mb-1"> <b> Download Certification Flyers</b></p>
                            <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                            <img src="../../images/icon2.png" width="40px" height="auto" alt="">
                            <img src="../../images/icon3.png" width="30px" height="auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            During your learning journey, you will obtain:
                        </p>

                        <ul class="left-align">
                            <li>90 days access to IBDL’s E-Learning course</li>
                            <li>IBDL Professional Textbook</li>
                            <li>Online practice test</li>
                            <li>IBDL official examination (3 attempts)</li>
                            <li>The international certificate from Missouri State University upon passing the exam
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1">
                        <p class="cert-main-title">
                            INTERNATIONAL RECOGNITION
                        </p>
                        <p>
                            Add a real competitive advantage to your career by obtaining IBDL Professional certificate
                            with
                            the international accreditation from Missouri State University.
                            <br>This course is a preparation for the international exam of IBDL Professional credential

                        </p>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-8 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            Components of Your Learning Journey:
                        </p>
                        <ol class="left-align">
                            <li> Managing</li>
                            <li> Managing International Management</li>
                            <li> Planning and Strategic Management</li>
                            <li> Managerial Decision Making</li>
                            <li> Managerial Control</li>
                            <li> Teamwork</li>
                            <li> Communicating</li>
                            <li> Human Resources Management</li>
                            <li> Organization Structure</li>
                            <li> Organizational Agility</li>
                            <li> Managing the Diverse Workforce</li>
                            <li> The External Environment and Organizational Culture</li>
                            <li> Ethics and Corporate Responsibility</li>
                            <li> Managing Technology and Innovation</li>
                            <li> Creating and Managing Change</li>


                        </ol>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection