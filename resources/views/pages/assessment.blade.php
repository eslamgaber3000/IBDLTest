@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Asessment','breadcrumb'=>
'Home/Asessment','header'=>'products.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-0 order-1">
                        <p>
                            Are an invaluable tool for businesses to
                            measure their performance and identify areas of
                            improvement. They provide detailed insights
                            into customer satisfaction, employee
                            engagement, operational efficiency, financial
                            health and more. With the right assessment
                            service provider, organizations can make
                            informed decisions that will help them reach
                            their goals faster.
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  mb-5 col-7">
                            <img src="../../images/services/Services.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="row justify-content-center">
                        <div style="margin-top: -5px" class="col-md-4 p-5">
                            <a class="p-5" href="{{url('assessments/pqp')}}"> <img class="p-2"
                                    src="../../images/services/PQP-01.png" width="100%" height="auto" alt=""> </a>
                        </div>
                        <div class="col-md-4 p-5 ">
                            <a class="p-5" href="{url('assessments/cpat')}"> <img class="p-2"
                                    src="../../images/services/CPAT-01.png" width="100%" height="auto" alt=""> </a>
                        </div>

                    </div>
                </div>


            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection