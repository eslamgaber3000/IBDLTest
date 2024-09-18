@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Accreditation','breadcrumb'=>
'Home/Accreditation','header'=>'services.jpg','icon'=>'services.png'])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div class="col-lg-5 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-0 order-1">
                        <p>
                            Become one of IBDL globaly recognized partners, IBDL accreditation center is providing a 3
                            types of accreditation for the partners after passing the accreditation requirements for
                            each category, learn more about each type of the provided accreditations by following the
                            links below: Accredited Service Provider, Accredited Exam Center, and Accredited Trainer.
                            lear
                        </p>
                    </div>
                    <div class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  mb-5 col-7">
                            <img src="../../images/services/Accreditation.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection