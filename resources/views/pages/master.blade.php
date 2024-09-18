@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'IBDL Master','breadcrumb'=> 'Our Products/IBDL
Master','header'=>'Our products/qulifications.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-12 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-1 order-1">
                        <p>
                            IBDL Master is the business leaders' path to develop and implement accurate business
                            strategies by providing the knowledge and skills necessary to make efficient decisions that
                            contribute to the success of their organizations.
                            IBDL Master enables leaders to enhance the competitive position of the organization and lead
                            in such a way that guarantees excellence in the business world.
                        </p>
                    </div>
                    <div
                        class="col-lg-6 mx-auto mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-0 order-0">
                        <div class="cert-img col-lg-12 col-7">
                            <img src="../../images/certs/master.png" width="100%" height="auto" alt="">
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
                            <li>IBDL Master Textbook</li>
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
                            Add a real competitive advantage to your career by obtaining IBDL Master certificate with
                            the international accreditation from Missouri State University.
                            <br>This course is a preparation for the international exam of IBDL Master credential

                        </p>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-8 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            Components of Your Learning Journey:
                        </p>
                        <ol style="" class="left-align">

                            <li> What Is Strategy and Why Is It Important?</li>
                            <li> Charting a Company's Direction.
                            <li> Evaluating a Company's Resources, Capabilities, and Competitiveness.</li>
                            <li> The Five Generic Competitive Strategies.</li>
                            <li> Strengthening a Company's Competitive Position.</li>
                            <li> Strategies for Competing in International Markets.</li>
                            <li> Corporate Strategy.</li>
                            <li> Building an Organization Capable of Good Strategy Execution.</li>
                            <li> Leadership.</li>
                            <li> Fifteen Complete Harvard Case Studies.</li>
                        </ol>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection