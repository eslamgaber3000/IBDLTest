@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'CPAT','breadcrumb'=> 'Our
ProductS/CPAT','header'=>'Our products/accreditation.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0  order-lg-0 order-1">
                        <h4 style="color:#e30618;font-weight:600">CPAT: A success tool for individuals</h4>
                        <p style="text-align:justify">
                            In our continuously changing world, CPAT provides you with better understanding of how you
                            react in times of major changes and give you practical advices for adapting to change which
                            is crucial for success, personal development and increased resilience.
                            You will see a picture of yourself during change from different perspectives including
                            anticipation, readiness, and energy. The more you know, the better you can become.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-10">
                            <img src="../../images/Services/CPAT-01.png" width="100%" height="auto" alt="">
                        </div>
                        {{-- <div class="cert-flyer col-12">
                            <p class="mb-1"> <b> Download Certification Flyers</b></p>
                            <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                            <img src="../../images/icon2.png" width="40px" height="auto" alt="">
                            <img src="../../images/icon3.png" width="30px" height="auto" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="row cert-main pt-5">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0 ">
                        <h4 style="color:#e30618;font-weight:600;text-align:jus">CPAT: A Corporate Excellence Tool</h4>
                        <p style="text-align:justify">
                            Change Profile And Adaptability Tool is a tool for discovering the how employees react to
                            change and assess their abilities to adapt to major changes in our rapidly evolving business
                            world. It helps organizations to identify employees who can act as change agents and
                            determine those who may possess more resistance to prepare the suitable strategies for each
                            to ensure success of the desired organizational change.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column ">
                        <div class="cert-img col-lg-12  m-auto col-10">
                            <img src="../../images/Services/cpat_r.png" width="100%" height="auto" alt="">
                        </div>
                        {{-- <div class="cert-flyer col-12">
                            <p class="mb-1"> <b> Download Certification Flyers</b></p>
                            <img src="../../images/icon1.png" width="30px" height="auto" alt="">
                            <img src="../../images/icon2.png" width="40px" height="auto" alt="">
                            <img src="../../images/icon3.png" width="30px" height="auto" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection