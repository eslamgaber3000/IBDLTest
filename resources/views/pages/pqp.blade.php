@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'PQP','breadcrumb'=> 'Our
ProductS/PQP','header'=>'Our products/accreditation.jpg','icon'=>'products.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0  order-lg-0 order-1">
                        <h4 style="color:#e30618;font-weight:600">PQP: A success tool for individuals</h4>
                        <p style="text-align:justify">
                            PQP is your tool for assessing your personality traits. It combines different psychometrical
                            aspects to give a clearer perspective for your personality traits and motivators.
                            PQP increases your employment potential for the job you want, by providing a comprehensive
                            detailed report that you can use alongside your resume to help you clarify how fit you are
                            for the job.

                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-10">
                            <img src="../../images/Services/PQP-01.png" width="100%" height="auto" alt="">
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
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0  ">
                        <h4 style="color:#e30618;font-weight:600;text-align:jus">PQP: A Corporate Excellence Tool</h4>
                        <p style="text-align:justify">
                            PQP helps organizations to select the best candidates for jobs.
                            The detailed PQP report provides an integrated profile of each employee, which gives
                            management a deeper knowledge and evaluation of new candidates and existing employees' job
                            fitting.
                            <br>
                            PQP functions also as an efficient tool for training needs analysis to help professionals
                            build an optimized training plan.

                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column ">
                        <div class="cert-img col-lg-12  m-auto col-10">
                            <img src="../../images/Services/pqp_r.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection