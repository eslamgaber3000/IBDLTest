@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Professional Services','breadcrumb'=> 'Home/Professional
Services','header'=>'services.jpg','icon'=>'services.png'])

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
                            <img src="../../images/services/Services1.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
                <h3 style="color:#e30618" class="fw-bold">Professional Services</h3>

                <a style="color: black;font-size:16px;font-weight:500" class="dropdown-item"
                    href="{{url('pages/solutions_entrepreneurship')}}">
                    Solutions for Entrepreneurship </a>


                <a style="color: black;font-size:16px;font-weight:500" class="dropdown-item"
                    href="{{url('pages/solutions_higher_education')}}">
                    Solutions for Higher Education </a>

                <a style="color: black;font-size:16px;font-weight:500" class="dropdown-item"
                    href="{{url('pages/solutions_governments')}}">
                    Solutions for Governments </a>

                <a style="color: black;font-size:16px;font-weight:500" class="dropdown-item"
                    href="{{url('pages/solutions_business')}}">
                    Solutions
                    for business </a>
                <a style="color: black;font-size:16px;font-weight:500" class="dropdown-item"
                    href="{{url('pages/solutions_banks')}}">
                    Solutions
                    for
                    Banks </a>
                <a style="color: black;font-size:16px;font-weight:500" class="dropdown-item"
                    href="{{url('pages/solutions_learning_development')}}">
                    Solutions for Learning and development </a>



            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection