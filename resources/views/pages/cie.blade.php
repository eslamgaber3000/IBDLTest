@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Certified Industrial Engineer','breadcrumb'=> 'Our Products/Certified Industrial
Engineer','header'=>'Our products/qulifications.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-12 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-1 order-1">
                        <p>
                            Certified Industrial Engineering is your one of a kind qualification that gives you the
                            opportunity to take the next step in your manufacturing field. You will acquire the
                            knowledge and experience necessary to improve your efficiency in managing industrial
                            processes, and to gain a deeper understanding of the basic elements of operations
                            management, quality management, project management, and supply chain management, thus
                            improving your ability to identify, formulate and solve problems of industrial processes,
                            and takes your career to another level
                        </p>
                    </div>
                    <div
                        class="col-lg-5 mx-auto mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-0 order-0">
                        <div class="cert-img col-lg-12 col-7">
                            <img src="../../images/certs/cie.png" class="p-5" width="100%" height="auto" alt="">
                        </div>
                        <div class="cert-flyer col-12 text-end">
                            <p class="mb-1"> <b> Download Certification Flyers</b></p>
                            <a href="#"> <img src="../../images/icon1.png" width="30px" height="auto" alt=""></a>
                            <a href="#"> <img src="../../images/icon2.png" width="40px" height="auto" alt=""></a>
                            <a href="#"> <img src="../../images/icon3.png" width="30px" height="auto" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            CIE PROGRAM PRE-REQUISITES:
                        </p>
                        <b> To be enrolled to the CIE program, you need to have the following qualifications:</b>
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
                            CIE program is accredited and recognized by the International Leadership Training Center
                            (ILTC) of Missouri State University (MSU) and powered by IBDL Learning Group.

                        </p>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-11 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            Components of Your Learning Journey:
                        </p>
                        <ol class="left-align">

                            <li>Add significant value to organizations by implementing improvements through application
                                of system, process, and management methodologies and tools.</li>
                            <li>To provide formal and informal project, administrative, and technical leadership.</li>
                            <li>Engage in professional growth through post-graduate education, certifications, and
                                professional societies.</li>
                            <li>To encourage higher educational standards in the Industrial Engineering field.</li>
                            <li>To establish an objective measure of an individual's knowledge and competence in the
                                field of Industrial Engineering.</li>
                            <li>To encourage continued professional development by Industrial Engineers.</li>
                            <li>The CIE (Certified Industrial Engineer) is the advanced professional certification
                                specifically designed to measure the crucial technical and management skills, making
                                participants better-rounded and employable engineers. Achieving the CIE credential
                                demonstrates your mastery of planning, analysis, control, and decision support. </li>



                        </ol>
                    </div>

                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection