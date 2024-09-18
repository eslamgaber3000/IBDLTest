@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'qualifications','breadcrumb'=>
'Home/qualifications','header'=>'products.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-0 order-1">
                        <p>
                            Professional business qualifications are essential
                            for success in the corporate world. They include
                            knowledge of strategies, planning, marketing,
                            operations management and other relevant
                            topics. Having these skills can help you stand
                            out from the competition and open up new
                            opportunities.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  mb-5 col-7">
                            <img src="../../images/services/Qualifications.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="row">
                        <div class="col-md-4 p-5">
                            <a href="{{url('pages/essential')}}"> <img style="margin-top:-4px"
                                    src="../../images/certs/essential.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 pt-5 p-4">
                            <a href="{{url('pages/professional')}}"> <img src="../../images/certs/professional.png"
                                    width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 p-5">
                            <a href="{{url('pages/master')}}"> <img style="padding:0 0.9em 0.9em 0.9em"
                                    src="../../images/certs/master.png" width="100%" height="auto" alt=""> </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 p-5">
                        <a href="{{url('pages/ce')}}"> <img style="padding: 0.5em;" src="../../images/certs/ce.png"
                                width="100%" height="auto" alt=""> </a>
                    </div>
                    <div class="col-md-3 p-5">
                        <a href="{{url('pages/cie')}}"> <img style="padding: 0.5em;" src="../../images/certs/cie.png"
                                width="100%" height="auto" alt=""> </a>
                    </div>


                </div>

            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection