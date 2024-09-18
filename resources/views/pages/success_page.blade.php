@extends('layout-new')

@section('websit_content')
<section class="inner-hero">
    <img style="width: -webkit-fill-available;" src="{{ asset('storage/pages/accreditations.jpg') }}" alt="">
    <div class="container">

    </div>
    <div class="icon-section">
        <img class="icon" src="{{ asset('storage/pages/services.png') }}" alt="">

    </div>
</section>

<section style="height: 100vh">
    <div class="container-fluid">
        <div style="height: 100vh" class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <i class="fa-regular fa-circle-check" style="color: #5d82c0;"></i>
            </div>
            @include('include.sidebar')
        </div>
    </div>

</section>


@endsection