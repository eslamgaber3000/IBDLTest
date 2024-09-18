@extends('layout-new')

@section('websit_content')
@include('include.header', ['title' => __('Providers'),'breadcrumb'=>
'Home/Providers','header'=>'pages/services.jpg','icon'=>'pages/services.png'])
<style>
    .provider-image {
        width: 68px !important;
        height: 68px !important;
        text-align: center;
        box-sizing: border-box;
        margin-left: 0px !important;
        margin-top: 7px !important;
    }
</style>
<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="container com-sp pad-bot-70">
                    <div class="row">
                        <div class="">

                            <div class="d-flex justify-content-between">
                                <div class="mb-5">
                                    <h2 class="fw-bold red">{{ $country }} <span> providers</span></h2>
                                </div>
                                <div class="">
                                    <form action="{{ route('regional-provider') }}" method="GET">
                                          @csrf
                                        <div class="input-group mb-3">
                                            <select name="country" id="select-state" class="form-select">
                                                <option value="{{ $country }}"> {{ $country }}</option>

                                                @foreach($all_country as $all_countries)

                                                <option value="{{ $all_countries->short_name }}">
                                                    {{ $all_countries->short_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-warning ms-0" type="submit">{{ __('Search')
                                                }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @foreach ($data as $provider)
                            <div class="card coll-card mb-5">
                                <div class="row g-0">
                                    <div style="text-align: center;" class="col-md-4">
                                        <img src="../../images/{{$provider->img}}"
                                            class="img-fluid rounded-start coll-card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body  coll-card-body">
                                            <h5 class="card-subtitle mb-2 coll-card-subtitle">{{$provider['provider']}}
                                            </h5>
                                            <h6 class="card-title coll-card-title">{{$provider['city']}}</h6>
                                            <div class="row d-flex">
                                                <div class="col-10 col-md-6 d-flex">
                                                    <div class="social-wrapper">
                                                        <i class="fa-solid fa-phone social-circle"
                                                            style="color: #ffffff;"></i>
                                                    </div>
                                                    <div class="coll-link-content">
                                                        <p> {{$provider['phone'] }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-10 col-md-6  d-flex">
                                                    <div class="social-wrapper">
                                                        <i class="fa-solid fa-fax social-circle"
                                                            style="color: #ffffff;"></i>
                                                    </div>
                                                    <div class="coll-link-content">
                                                        <p> {{$provider['fax'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row d-flex">
                                                <div class="col-10 col-md-6  d-flex">
                                                    <div class="social-wrapper">
                                                        <i class="fa-solid fa-envelope social-circle"
                                                            style="color: #ffffff;"></i>
                                                    </div>
                                                    <div class="coll-link-content">
                                                        <p> {{$provider['email'] }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-10 col-md-6  d-flex">
                                                    <div class="social-wrapper">
                                                        <i class="fa-solid fa-link social-circle social-circle"
                                                            style="color: #ffffff;"></i>
                                                    </div>
                                                    <div class="coll-link-content">
                                                        <a target="_blank" href=" {{$provider['website'] }}">
                                                            {{$provider['website'] }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="d-flex col-12">
                                                    <div class="social-wrapper">
                                                        <i class="fa-sharp fa-solid fa-location-dot social-circle"
                                                            style="color: #ffffff;padding:0.42em"></i>
                                                    </div>
                                                    <div class="coll-link-content">
                                                        <p>{{$provider['address'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                            < <div class="ed-about-sec1">
                                <div class="col-md-6"></div>
                                <div class="col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('include.sidebar')
    </div>
    </div>
</section>
@endsection