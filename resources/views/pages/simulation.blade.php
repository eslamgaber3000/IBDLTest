@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Business Simulation','breadcrumb'=> 'Home/Business
Simulation','header'=>'products.jpg','icon'=>'products.png'])

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
                            <img src="../../images/services/Simulation.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="row">
                        <div style="margin-top: -5px" class="col-md-4 p-5">
                            <a class="p-5" href="{{url('pages/master_board_game')}}"> <img class="p-2"
                                    src="../../images/services/MBG-01.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 p-5 mt-2">
                            <a class="p-5" href="{{url('pages/sparta')}}"> <img class="p-2"
                                    src="../../images/services/Sparta-01.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 p-5 mt-4">
                            <a href="{{url('pages/win_v_war')}}"> <img src="../../images/services/WvW-01.png"
                                    width="100%" height="auto" alt=""> </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="row">
                        <div style="margin-top: -5px" class="col-md-4 p-5">
                            <a class="p-5" href="{{url('pages/master_board_game')}}"> <img class="p-2"
                                    src="../../images/services/mogul.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 p-5 mt-2">
                            <a class="p-5" href="{{url('pages/sparta')}}"> <img class="p-2"
                                    src="../../images/services/micromatic.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 p-5 mt-1">
                            <a href="{{url('pages/Maven')}}"> <img src="../../images/services/WvW-01.png" width="100%"
                                    height="auto" alt=""> </a>
                        </div>
                    </div>
                </div>


            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection