@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Executive Education','breadcrumb'=> 'Home/Executive
Education','header'=>'products.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-0 order-1">
                        <p>
                            Is a great way for executives to stay up-to-date
                            on the latest trends and developments in their
                            field. It provides an opportunity to learn from
                            industry experts, network with peers, and gain
                            valuable insights that can help them succeed in
                            their roles.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  mb-5 col-7">
                            <img src="../../images/services/Education.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="row d-flex align-items-baseline">
                        <div class="col-md-4 mb-5">
                            <a class="" href="{{url('pages/aelp')}}"> <img class="" style="width: 74%;"
                                    src="../../images/services/AELP-01.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 mb-5">
                            <a class="" href="{{url('pages/ewlp')}}"> <img class="" style="width: 78%;"
                                    src="../../images/services/EWLP-01.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 mb-5">
                            <a href="{{url('pages/ewlp')}}"> <img style=""
                                    src="../../images/services/Economic Diplomacy-01.png" width="100%" height="auto"
                                    alt=""> </a>
                        </div>
                    </div>

                    <div class="row d-flex align-items-baseline">

                        <div class="col-md-4 mb-5">
                            <a class="" href="{{url('pages/lfc')}}"> <img class="" style="width: 66%;"
                                    src="../../images/services/LFC-01.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 mb-5">
                            <a href="{{url('pages/ewlp')}}"> <img style=""
                                    src="../../images/services/Economic Diplomacy-01.png" width="100%" height="auto"
                                    alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection