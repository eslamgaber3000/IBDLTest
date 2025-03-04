@extends('layout-new')
{{-- @inject('Text', 'App\Libs\text') --}}
@section('websit_content')


{{-- <section class="main-hero " style="background-color: #1d1d39;   background-image:url({{ asset('anniversary/assets/img/Farme.png') }}); background-size: 100% 100%; z-40">
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"
        class="slide-caption col-10 col-lg-5 ms-5 text-start" style="


    position: absolute;
    color: #1d1a3d;
    background: transparent;
    bottom: 15em;
    left: 70px;
    width: 34%;
    height: auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: start;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    align-self: center;
    z-index: 5;

          ">
        @php
        echo $homepage->inspire
        @endphp

        <div class="d-flex mt-4 justify-content-between align-items-center" >
            <div class="review">
                <h5 class="fw-bold" style="color:white"> Trust Score </h5>
                <div class="ratings mb-2">
                    <div class="empty-stars"></div>
                    <div class="full-stars" style="width:{{$star_rating}}%"></div>
                </div>
                <b style="font-size: 1.5em;color:white" class="fw-bold mx-2">{{$all_rate}} </b>
                <div class="mt-1 fw-bold">
                    <a style="text-decoration: underline;color:white" href="{{url('pages/user_review')}}"> Read Our Dear
                        Users Reviews </a>
                </div>
            </div>
            <div class="button ms-auto">
              
                <a href="{{ route('anniversary_page') }}"> <button class="btn btn-warning button fw-bold"> 20 <sup>th</sup> Anniversary</button> </a>
               
            </div>
        </div>
    </div>
         <div>
              <img data-aos="fade-up"  data-aos-duration="500" data-aos-delay="200" class="image2  d-none d-lg-block " 
              style="           position: absolute;
                                bottom: 25%;
                                right: 75px;
                                z-index: 3;
                                height: auto;
                                width: 520px;
                                max-height: 100%;"                  
            src="{{ asset('anniversary/assets/img/hero-img.png') }}" />
        </div>
</section> --}}

{{-- rebuild header part  --}}

<style>



/* Hero */
.hero {
  width: 100%;
  min-height: 85vh;
  position: relative;
  padding: 60px 0;
  display: flex;
  align-items: center;
}

.hero-section {
  color: #ffffff;
  background-color:#1d1d39;
  padding: 60px 0;
  scroll-margin-top: 92px;
  overflow: clip;
}

.hero-section p {
  color: color-mix(in srgb, #ffffff, transparent 30%);
  margin: 5px 0 30px 0;
  font-size: 20px;
  font-weight: 400;
}

</style>

<section id="hero" class="hero hero-section dark-background" style="background-image:url({{ asset('anniversary/assets/img/Farme.png') }}); background-size: 100% 100%; ">

    <div class="container">
      <div class="row gy-4 justify-content-center justify-content-lg-between">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            @php
            echo $homepage->inspire
            @endphp
          <div class="d-flex mt-4 justify-content-between align-items-center" data-aos="fade-up"
         >
            <div class="review">
                <h5 class="fw-bold" style="color:white"> Trust Score </h5>
                <div class="ratings mb-2">
                    <div class="empty-stars"></div>
                    <div class="full-stars" style="width:{{$star_rating}}%"></div>
                </div>
                <b style="font-size: 1.5em;color:white" class="fw-bold mx-2">{{$all_rate}} </b>
                <div class="mt-1 fw-bold">
                    <a style="text-decoration: underline;color:white" href="{{url('pages/user_review')}}"> Read Our Dear
                        Users Reviews </a>
                        <div class="button mt-4">
                
                            <a href="{{ route('anniversary_page') }}"> <button class="btn btn-warning button fw-bold"> 20 <sup>th</sup> Anniversary</button> </a>
                           
                        </div>
                </div>
            </div>

            {{-- <div class="button ms-auto">
                
                <a href="{{ route('anniversary_page') }}"> <button class="btn btn-warning button fw-bold"> 20 <sup>th</sup> Anniversary</button> </a>
               
            </div> --}}
        </div>
        </div>
        <div class=" d-lg-block col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{ asset('anniversary/assets/img/hero-img.png') }}" 
          data-aos-duration="500" data-aos-delay="200"
          class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>





<section class="brief-section ">
    <div class="d-flex row">

        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
            class="col-lg-6 col-11 mb-lg-0 ms-4 mb-5 d-flex">

            <div class="brief-logo">
                <p class="brief-logo-name">
                    IBDL LEARNING GROUP
                </p>
                <div class="d-flex">
                    <h3 style="margin:0 0.7em 0 0;align-self:end;font-weight:600">IBDL IN BRIEF</h3>
                    <img src="{{ asset('images/icon-white.png') }}" alt="" height="auto" width="40">
                </div>
                @php
                echo $homepage->brief
                @endphp
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
            class="col-lg-4 col-md-10 col-10  mt-5 mt-lg-0 offset-lg-1 offset-sm-1 offset-1 brief-box d-flex flex-column">
            <div class="text-end">
                <img src="{{ asset('images/icon-white1.png') }}" alt="" height="auto" width="50">
            </div>
            <div class="mission d-flex">
                <img src="{{ asset('images/Mission.png') }}" alt="" height="40" width="40">
                <div class="mission-text ms-2">
                    <h4 style="color: white">Our Mission</h4>
                    @php
                    echo $homepage->mission
                    @endphp

                </div>
            </div>
            <div class="goals mt-3 d-flex">
                <img src="{{ asset('images/Goals.png') }}" alt="" height="40" width="40">
                <div class="mission-text ms-2">
                    <h4 style="color: white">Our Goals</h4>
                    @php
                    echo $homepage->goals
                    @endphp

                </div>
            </div>
        </div>
    </div>
</section>
<section class="inspire section fp-auto-height" id="section2">
    <div class="container">
        <div class="section-title mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <h2 class="heading text-white">{{ __('OUR INFLUENCE') }}</h2>
        </div>
        <div class="full-bot-book">
            <div class="container">
                <div class="col-md-12">
                    <div class="container-fluid text-center" style=" ">
                        <div class="row">
                            <div class="col-md-3">
                                <i style="  font-size: 4em !important; margin-top: 10%;;" class="far fa-file-alt"></i>
                                <h2 style="font-size: 20px;padding-top:5px;font-weight:700;">&nbsp;{{ __('EXAMS') }}
                                </h2>
                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    {{$homepage->exams_count}}</p>
                            </div>
                            <div class="col-md-3">
                                <i style="  font-size: 4em !important; margin-top: 10%;;"
                                    class="fas fa-map-marker-alt"></i>
                                <h2 style="font-size: 20px;padding-top:9px;font-weight:700;">&nbsp;{{ __('COUNTRY') }}
                                </h2>
                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    {{$homepage->country_count}}</p>
                            </div>
                            <div class="col-md-3">
                                <i style="  font-size: 4em !important; margin-top: 10%;;" class="fas fa-users"></i>
                                <h2 style="font-size: 20px;padding-top:5px;font-weight:700;">&nbsp;{{ __('STRATEGIC
                                    PARTNER') }}</h2>
                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    {{$homepage->partners_count}}</p>
                            </div>
                            <div class="col-md-3">
                                <i style="  font-size: 4em !important; margin-top: 10%;;" class="fas fa-tv"></i>
                                <h2 style="font-size: 20px;padding-top:5px;font-weight:700;" id="test">&nbsp;{{ __('EXAM
                                    PROVIDER') }}</h2>
                                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    {{$homepage->providers_count}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr style="border: none" class="my-1">
<section class="services p-md-5 py-5 px-0">
    <div class="d-flex row">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
            class="col-lg-6 col-12 mt-5 mt-lg-0 order-lg-0 order-1 d-flex flex-column service-img ">
            <div class="row">

                <div class="col-sm-4 col-8 offset-2 offset-sm-0">
                    <a href="{{url('pages/'.'service')}}"> <img src="images/services/Services1.png" class="card-icon"
                            alt="Accreditation" /></a>
                </div>

                <div class="col-sm-4 col-8 offset-2 offset-sm-0">
                    <a href="{{url('pages/'.'assessment')}}"> <img src="images/services/Services.png" class="card-icon"
                            alt="Accreditation" /></a>
                </div>
                @if (session('ver') === 'Trainee')
                @else
                <div class="col-sm-4 col-8 offset-2 offset-sm-0">
                    <a href="{{url('pages/'.'simulation')}}"> <img src="images/services/Simulation.png"
                            class="card-icon" alt="Accreditation" /></a>
                </div>
                @endif
            </div>
            <div class="row mt-2">
                <div class="col-sm-4 col-8 offset-2 offset-sm-0">
                    <a href="{{url('pages/'.'qualifications')}}"> <img src="images/services/Qualifications.png"
                            class="card-icon" alt="Accreditation" /></a>
                </div>
                @if (session('ver') === 'corporate' || session('ver') === 'Center')
                @else
                <div class="col-sm-4 col-8 offset-2 offset-sm-0">
                    <a href="{{url('pages/'.'accreditation')}}"> <img src="images/services/Accreditation.png"
                            class="card-icon" alt="Accreditation" />
                    </a>
                </div>
                @endif
                @if (session('ver') === 'Center' || session('ver') === 'Trainee')

                @else
                <div class="col-sm-4 col-8 offset-2 offset-sm-0">
                    <a href="{{url('pages/'.'education')}}"> <img src="images/services/Education.png" class="card-icon"
                            alt="Accreditation" /></a>
                </div>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-11 order-lg-1 order-0">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="service-logo">
                <p style="color: white" class="service-logo-name">
                    WHAT IBDL OFFERS
                </p>
                <div class="d-flex">
                    <h3 class="fw-bold" style="margin:0 0.7em 0 0;align-self:end;font-weight:600;color:black">IBDL
                        SERVICES</h3>
                    <img src="{{ asset('images/icon-white.png') }}" alt="" style="margin-bottom: 1em;" height="auto"
                        width="40">
                </div>
                @php
                echo $homepage->services
                @endphp

            </div>
        </div>
    </div>
</section>

<section class="d-none d-md-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
    style="height:auto;width:100%">
    <hr style="margin-bottom: -1rem; z-index: 550; position: relative; border: 3px solid white; opacity: 1">
    <div class="d-flex flex-wrap">
        <div style="background-color:#E30618;padding:2em 8em 4em 8em" class="col-lg-6 col-12">
            <h1 class="mb-5 " style="color: white;font-size:3.8em;font-weight:700">
                IBDL CREDENTIAL
            </h1>
            @php
            echo $homepage->credential
            @endphp
            <div class="text-end">
                <a style="text-decoration:none" href="{{url('pages/'.'chartered_designation')}}">
                    <button style="background-color: #1d1a3d;color:white" class="mt-4 ms-auto btn btn-lg">
                        Learn More
                    </button>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-12 home-cert">
            <div class="d-flex">
                <h3 style="font-size: 3.8em;
            padding-left: 0.7em;
            font-weight: 700;
            border-left: 14px solid red;line-height:1.3em;
            color: white;">IBDL DESIGNATION</h3>
            </div>
            <div class="mt-4">
                <img src="../../storage/pages/Certificate-for home page-01.jpg" width="100%" class="" height="auto"
                    alt="">
            </div>
        </div>
    </div>
</section>
<section class="d-flex d-md-none" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
    style="height:auto;width:100%">
    <hr style="margin-bottom: -1rem; z-index: 550; position: relative; border: 3px solid white; opacity: 1">
    <div class="d-md-flex flex-md-wrap">
        <div class="col-lg-6 col-md-12 p-4" style="background-color:#E30618;">
            <h1 class="mb-5" style="color: white; font-size: 3em; font-weight: 700">IBDL CREDENTIAL</h1>
            @php
            echo $homepage->credential
            @endphp
            <div class="text-md-end">
                <a style="text-decoration:none" href="{{url('pages/'.'chartered_designation')}}">
                    <button style="background-color: #1d1a3d; color: white" class="mt-4 btn btn-lg">
                        Learn More
                    </button>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 p-4 home-cert">
            <div class="d-flex">
                <h3
                    style="font-size: 3em; padding-left: 0.7em; font-weight: 700; border-left: 14px solid red; line-height: 1.3em; color: white;">
                    IBDL DESIGNATION</h3>
            </div>
            <div class="mt-4">
                <img src="../../storage/pages/Essential Certificate-01.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section class="partners section fp-auto-height" id="section5">
    <div style="overflow: visible" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="container">
        <div class="section-title text-center">
            <h3 class="fw-bold heading" style="color:#E30618">WE ARE PROUD TO SERVE</h3>

        </div>

        <div class="card parent-card">
            <div class=" owl-carousel owl-home-carousel owl-home-qualifications ow-theme">
                @foreach($clients as $client)
                <div style="max-width: 50%;height:auto" class="col-auto m-auto" data-bs-toggle="tooltip"
                    data-bs-title="  {{$client->project_details}}">
                    <img src="../../storage/{{$client->logo}}" />
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>



<section class="solutions">
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="d-flex flex-column">
        <h2 class="text-center white">
            IBDL <br>
            PROFESSIONAL SOLUTIONS
        </h2>
        <br>
        @php
        echo $homepage->professional_solutions
        @endphp
        <br>

        @if (session('ver') === 'Trainee')
        <div class="col-lg-5 col-11 justify-content-center m-auto">
            <div style="height:auto;" class="solutions-box m-4">
                <h1 class="white">01</h1>
                <h3 style="font-size: 1.6rem;" class="white mt-3">For Entrepreneurship</h3>
                <p style="text-align: justify"> We present wide range of solutions that empower
                    @php
                    echo $homepage->professional_solutions_4
                    @endphp
                </p>
                <div class="">
                    <a style="color:white;" class="fw-bold text-end"
                        href="{{url('pages/'.'solutions_entrepreneurship')}}">See More</a>
                </div>
            </div>
        </div>
        @else



         <div style="overflow: visible;" class="container ">
            <div style="overflow: visible; display: flex;
            display: -webkit-flex;
            flex-wrap: wrap;justify-content:center"
                class="row row-cols-sm-1 row-cols-1 row-cols-lg-3 row-cols-md-2 m-auto">
                <div style="display:flex;flex-direction:column" class="col mt-5 ">
                    <div class="solutions-box">
                        <h1 class=" hsol white">01</h1>
                        <h3 style="font-size: 1.6rem;" class="blue mt-3">Solutions for Learning and Development</h3>
                        @php
                        echo $homepage->professional_solutions_1
                        @endphp
                        <div class="mb-2">
                            <a class="solsee fw-bold text-end" href="{{url('pages/'.'solutions_learning_development')}}">See
                                More</a>
                        </div>
                    </div>
                </div>
                @if (session('ver') === 'Center')
                @else
                <div style="display:flex;flex-direction:column" class="col mt-5 ">
                    <div class="solutions-box .solev">
                        <h1 class="hsol white">02</h1>
                        <h3 style="font-size: 1.6rem;" class=" blue mt-3">Solutions for Higher Education
                        </h3>
                        @php
                        echo $homepage->professional_solutions_2
                        @endphp
                        <div class="">
                            <a class="solsee fw-bold text-end" href="{{url('pages/'.'solutions_higher_education')}}">See
                                More</a>
                        </div>
                    </div>
                </div>
                <div style="display:flex;flex-direction:column" class="col mt-5 ">
                    <div class="solutions-box">
                        <h1 class="hsol white">03</h1>
                        <h3 style="font-size: 1.6rem;" class="blue mt-3">Solutions for Governments
                        </h3>
                        @php
                        echo $homepage->professional_solutions_3
                        @endphp
                        <div class="">
                            <a class="solsee fw-bold text-end" href="{{url('pages/'.'solutions_governments')}}">See More</a>
                        </div>
                    </div>
                </div>
                @endif
                @if (session('ver') === 'corporate' )
                @else
                <div style="display:flex;flex-direction:column" class="col mt-5  ">
                    <div class="solutions-box .solev">
                        <h1 class="hsol white">04</h1>
                        <h3 style="font-size: 1.6rem;" class="red blue mt-3"> Solutions for Entrepreneurship</h3>
                        @php
                        echo $homepage->professional_solutions_4
                        @endphp
                        <div class="">
                            <a class="solsee fw-bold text-end" href="{{url('pages/'.'solutions_entrepreneurship')}}">See
                                More</a>
                        </div>
                    </div>
                </div>
                @endif
                <div style="display:flex;flex-direction:column" class="col mt-5 ">
                    <div class="solutions-box">
                        <h1 class="hsol white">05</h1>
                        <h3 style="font-size: 1.6rem;" class="blue mt-3">Solutions for Businesses
                        </h3>
                        @php
                        echo $homepage->professional_solutions_5
                        @endphp
                        <div class="">
                            <a class="solsee fw-bold text-end" href="{{url('pages/'.'solutions_business')}}">See More</a>
                        </div>
                    </div>
                </div>
                <div style="display:flex;flex-direction:column" class="col mt-5 ">
                    <div class="solutions-box .solev">
                        <h1 class="hsol white">06</h1>
                        <h3 style="font-size: 1.6rem;" class="blue mt-3">Solutions for Banks
                        </h3>
                        @php
                        echo $homepage->professional_solutions_6
                        @endphp
                        <div class="">
                            <a class="solsee fw-bold text-end" href="{{url('pages/'.'solutions_banks')}}">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
{{-- <section class="hero-slide" style="
          background: url({{ asset('site/images/bg3.jpg') }}) no-repeat center center
            fixed;
          background-size: cover;
        ">
    <div class="slide-caption bg-1">
        <h2 class="title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            {{ __('OUR MISSION AND GOALS') }}
        </h2>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            {!! $home_content->missions_goals !!}
        </p>
        <a href="" class="btn btn-warning" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">{{ __('learn
            more') }}</a>
    </div>
</section> --}}






<section class="partners section fp-auto-height" id="section5">
    <div style="overflow: visible" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="container">
        <div class="section-title text-center">
            <h3 class="heading ">IBDL</h3>
            <h3 class="fw-bold" style="color:#1d1a3d">PARTNERS OF EXCELLENCE</h3>

        </div>
        <div class="card parent-card">
            <div class=" owl-carousel owl-home-carousel owl-home-qualifications ow-theme">
                @foreach($partners as $partner)
                <div class="col">
                    <a target="_blank" href="{{$partner->link}}">
                        <img src="../../storage/{{$partner->logo}}" alt="{{$partner->name}}" />
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="partners section fp-auto-height ">
    <div class="search-top search-home">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="container">
            <div class="row">


                <div class="col-md-6">
                    <div class="font-style-1 margin-none ">
                        <h3 class="font-weight-bold" style="color:#fff">{{ __('TRANSCRIPT') }}</h3>
                        <p class="parallax-text" style="color:#fff;font-weight:unset">
                            {{ __('View Your performance & Certification') }}.</p>
                    </div>
                    <div class="seacrh-form">


                        <form action="{{ route('certifications') }}" method="GET">

                            <div class="input-group mb-3">
                                <input type="text" name="Logbook" class="form-control"
                                    placeholder="Search By Your Logbook ." aria-label="Search By Your Logbook ."
                                    aria-describedby="button-addon2">
                                <button class="btn btn-warning ms-0" type="submit">{{ __('Search') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
             

                <div class="col-md-6 providers">
                    <div class="font-style-1 margin-none ">
                        <h3 class="font-weight-bold" style="color:#fff">{{ __('REGIONAL PROVIDERS') }}</h3>
                        <p class="parallax-text" style="color:#fff;font-weight:unset">
                            {{ __('Find Your Nearest Training
                            Provider') }}.</p>
                    </div>

                    <div class="seacrh-form">


                        <form action="{{ route('regional-provider') }}" method="GET">
                            <div class="input-group mb-3">

                                <select id="select-state" name="country" class="form-select">

                                    @foreach($all_country as $all_countries)

                                    <option value="{{ $all_countries->short_name }}">
                                        {{ $all_countries->short_name }}
                                    </option>
                                    @endforeach
                                </select>


                                <button class="btn btn-warning ms-0" type="submit">{{ __('Search') }}</button>
                            </div>




                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

</section>


{{-- <section class="chart-section section fp-auto-height ">
    <div class="  container-chart">
        <div class="container">
            <div class="row justify-content-center align-items-center">


                <div class="col-md-6">
                    <img class="img-fluid" src="{{ Storage::disk('public')->url($home_content->extra_image) }}" />

                </div>
                <div class="col-md-6 providers">
                    <div class="font-style-1 margin-none  ">

                        <p class="parallax-text text-dark" style="color:#fff;font-weight:unset">
                            {!! $home_content->extra_info !!}


                        </p>
                    </div>


                </div>


            </div>
        </div>
    </div>

</section> --}}

<div class="red-box">

</div>

{{-- <section class="partners">
    <div class="container com-sp pad-bot-70">
        <div class="">
            <div class="section-title aos-init aos-animate text-center">
                <h3 style="text-transform: uppercase;" class="heading">{{ __('INTERNATIONAL AFFILIATION') }}</h3>
                <p> </p>
            </div>
        </div>
        <div class=" parent-card">
            <div class="owl-carousel owl-home-certs owl-home-carousel owl-theme">
                @foreach ($providers as $provider)
                <div class="card ">
                    <div class="ed-course-in" style="text-align: center;">
                        <a class="course-overlay" href="#">
                            <img style="width: 80%;" src="{{ Storage::disk('public')->url($provider->img) }}"
                                alt="{{ $provider->provider }}">

                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}






<!--Mobile Menu-->

<style>
    .Simulation .card:hover:after {
        background: #0099cd;
    }

    .p-Services .card:hover:after {
        background: #9b9b9b;
    }

    .Services .card:hover:after {
        background: #8e53a1;
    }

    .Education .card:hover:after {
        background: #33afa3;
    }

    .Qualifications .card:hover:after {
        background: #2aa94a;
    }

    .Accreditation .card:hover:after {
        background: #afaf2f;
    }
</style>
@endsection

@section('scripts')



<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
  
  
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    $(document).ready(function() {
            $('.owl-home-qualifications').owlCarousel({
                margin: 0,
                loop: true,
                autoplay: true,
                item: 4,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1,
                        nav: false,
                        margin: 50
                    },
                    1000: {
                        items: 4
                    }
                }
            });


   

            $('.owl-home-certs').owlCarousel({
                margin: 0,
                loop: true,
                autoplay: true,
                item: 4,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2,
                        nav: false,
                        margin: 50
                    },
                    1000: {
                        items: 3
                    }
                }
            });


        });
</script>
@endsection