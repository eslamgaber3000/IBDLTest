@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'IBDL Essential','breadcrumb'=> 'Our Products/IBDL
Essential','header'=>'Our products/qulifications.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main ">
                    <div class="col-lg-12 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-1 order-1">
                        <p>
                            IBDL Essential is your gateway to the business world, giving you an engaging educational
                            experience specially designed for you. Moving from understanding the fundamentals of
                            business, to studying examples of leading organizations globally, to allow you to acquire
                            the knowledge and abilities you need for your next move to boost your career potential
                            and/or start your own business.
                        </p>
                    </div>
                    <div
                        class="col-lg-6 mx-auto mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-0 order-0">
                        <div class="cert-img col-lg-12 col-7">
                            <img src="../../images/certs/Essential.png" width="100%" height="auto" alt="">
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
                            <li>IBDL Essential Textbook</li>
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
                            Add a real competitive advantage to your career by obtaining IBDL Essential certificate with
                            the international accreditation from Missouri State University.
                            <br>This course is a preparation for the international exam of IBDL Essential credential

                        </p>
                    </div>
                </div>
                <div class="row cert-main">
                    <div class="col-lg-8 mb-5 col-10 offset-lg-0 offset-1">
                        <p class="cert-main-title">
                            Components of Your Learning Journey:
                        </p>
                        <ol class="left-align">
                            <li>
                                Entrepreneurship and Starting a Small Business
                            </li>
                            <li>
                                Management: Functions and Styles
                            </li>
                            <li>
                                Leadership and Motivation
                            </li>
                            <li>
                                Human Resources Management
                            </li>
                            <li>
                                Marketing: Product and Price
                            </li>
                            <li>
                                Marketing: Place and Promotion
                            </li>
                            <li>
                                Understanding Financial Information and Accounting
                            </li>
                            <li>
                                Business in Global Markets
                            </li>
                            <li>
                                Demonstrating Ethical Behavior and Social Responsibility
                            </li>
                            <li>
                                Information Technology in Business
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection