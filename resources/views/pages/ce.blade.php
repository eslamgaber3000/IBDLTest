@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Certified Educator ','breadcrumb'=> 'Our Products/Certified
Educator','header'=>'Our products/qulifications.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-12 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-1 order-1">
                        <p>
                            Certified Educator is the teachers' tool for providing a rich and personalized learning
                            experience for students.It enables schools to improve teachers' qualities by improving
                            teaching skills, knowledge, and pedagogical strategies, which enhance the quality of
                            teachers in the schools. Certified Educator helps the teacher to develop new skills and
                            strategies, improve classroom management, and how to better communicate effectively with
                            students, passing by learning modern and effective ways to provide information to different
                            students within the same class, leading to the ability to motivate students to interact
                            during the entire educational stages.
                        </p>
                    </div>
                    <div
                        class="col-lg-5 mx-auto mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-0 order-0">
                        <div class="cert-img col-lg-12   col-7">
                            <img src="../../images/certs/ce.png" width="100%" height="auto" class="p-5" alt="">
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
                            CE PROGRAM PRE-REQUISITES:
                        </p>
                        <b> To be enrolled to the CE program, you need to have the following qualifications:</b>
                        <ol>
                            <li> Bachelor degree holder. </li>
                            <li> Good command of English language </li>
                        </ol>
                    </div>
                    <div class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1">
                        <p class="cert-main-title">
                            INTERNATIONAL RECOGNITION
                        </p>
                        <p>
                            CE program is accredited and recognized by the International Leadership Training Center
                            (ILTC) of Missouri State University (MSU) and powered by IBDL Learning Group.

                        </p>
                    </div>
                </div>
                <div class="row cert-main">

                    <div class="col-lg-8 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            During your learning journey, you will obtain:
                        </p>

                        <ul class="left-align">
                            <li>90 days access to IBDL’s E-Learning course</li>
                            <li>CE Handbook or E-Book</li>
                            <li>Online demo exam</li>
                            <li>International Examination (3 attempts).</li>
                            <li>CE internationally recognized professional certificate, verified diploma by the
                                International Leadership Training Center (ILTC) of Missouri State University, USA.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection