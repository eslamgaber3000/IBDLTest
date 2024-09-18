@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Certified Organizational Learning Professional','breadcrumb'=> 'Our
Products/Certified Organizational Learning Professional',
'header'=>'Our products/qulifications.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-12 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-1 order-1">
                        <p>
                            Are you ready to revolutionize the your way of learning and make a real impact in your
                            organization? COLP certificate is your gateway to unlocking the secrets of dynamic learning
                            cultures. By adopting the learning driven business model, COLP will help you gain the
                            expertise to drive performance, foster innovation, and unleash the full potential of your
                            organization. Join the league of exceptional leaders and become a catalyst for change. Are
                            you up for the challenge?
                        </p>
                    </div>
                    <div
                        class="col-lg-6 mx-auto mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-0 order-0">
                        <div class="cert-img col-lg-12 col-7">
                            {{-- <img src="../../images/certs/master.png" width="100%" height="auto" alt=""> --}}
                        </div>
                        {{-- <div class="cert-flyer col-12">
                            <p class="mb-1"> <b> Download Certification Flyers</b></p>
                            <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                            <img src="../../images/icon2.png" width="40px" height="auto" alt="">
                            <img src="../../images/icon3.png" width="30px" height="auto" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            During your learning journey, you will obtain:
                        </p>

                        <ul class="left-align">
                            <li> Handbook of units.</li>
                            <li> Lectures by world class organizational learning experts.</li>
                            <li> Access to niche organizational learning forums.</li>
                            <li> The international certificate from Missouri State University upon passing the
                                successful evaluation point for the final graduation project.
                            <li> Membership access to the A-class worldwide organizational learning ecosystem including:
                                <ul>
                                    <li>The British Quality Foundation (BQF).</li>
                                    <li>International Foundation for Action Learning (IFAL).</li>
                                    <li>The Royal Society of Arts, Manufactures, and Commerce (RSA).</li>
                                    <li>The Scotland International Development Alliance (SIDA).</li>
                                    <li>The British Standards Institution (BSI).</li>
                                    <li>Global Benchmarking Network.</li>
                                    <li>Belbin.</li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1">
                        <p class="cert-main-title">
                            INTERNATIONAL RECOGNITION
                        </p>
                        <p>
                            Add a real competitive advantage to your career by obtaining COLP certificate with the
                            international accreditation from Missouri State University

                        </p>
                        <br>
                        <p class="cert-main-title">
                            Components of Your Learning Journey:
                        </p>
                        <ol style="" class="left-align">
                            <li> Introduction to Organizational Learning.</li>
                            <li> Individual Learning System.</li>
                            <li> Team Learning System.</li>
                            <li> Organization-wide learning System.</li>
                            <li> Research Skills and Project Report.</li>
                            <li> Optional unit (Sustainability and Ethics or Civic Institutions and Sustainable
                                Development).</li>
                            <li> Practical graduation project.</li>

                        </ol>
                    </div>
                </div>
                {{-- <div class="row cert-main">
                    <div class="col-lg-8 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            Components of Your Learning Journey:
                        </p>
                        <ol style="" class="left-align">
                            <li> Introduction to Organizational Learning.</li>
                            <li> Individual Learning System.</li>
                            <li> Team Learning System.</li>
                            <li> Organization-wide learning System.</li>
                            <li> Research Skills and Project Report.</li>
                            <li> Optional unit (Sustainability and Ethics or Civic Institutions and Sustainable
                                Development).</li>
                            <li> Practical graduation project.</li>

                        </ol>
                    </div>
                </div> --}}
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection