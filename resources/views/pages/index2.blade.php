@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])

<style>
    .sendToPdfFiller {
        display: none !important;
    }
</style>
<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">

                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0 cert-first order-lg-0 order-1">
                        @php
                        echo $page->text_1
                        @endphp
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column order-lg-1 order-0">
                        <div class="cert-img col-lg-12  m-auto col-7">
                            <img src="../../storage/{{$page->logo}}" width="100%" height="auto" alt="">
                        </div>
                        <div class="cert-flyer col-12">
                            @if(isset($page->flyer_ar) || isset($page->flyer_en) || isset($page->flyer_fr))
                            <p class="mb-1"> <b> Download Flyers</b></p>
                            @endif
                            @if(isset($page->flyer_ar))
                            <a target="_blank" href="{{ route('getFile',$page->flyer_ar)}}"> <img
                                    src="../../images/icon1.png" width="30px" height="auto" alt=""> </a>
                            @endif
                            @if(isset($page->flyer_en))
                            <a target="_blank" href="{{ route('getFile',$page->flyer_en)}}"> <img
                                    src="../../images/icon2.png" width="40px" height="auto" alt=""></a>
                            @endif
                            @if(isset($page->flyer_fr))
                            <a target="_blank" href="{{ route('getFile',$page->flyer_fr)}}"> <img
                                    src="../../images/icon3.png" width="30px" height="auto" alt=""></a>
                            @endif
                        </div>
                    </div>
                </div>
                @if(isset($page->image))
                <div class="row cert-main pt-5">
                    <div class="col-lg-6 mb-5 col-12 offset-lg-0 offset-0  ">
                        @php
                        echo $page->text_2
                        @endphp
                    </div>
                    <div class="col-lg-5 mb-5 col-12 offset-lg-1 offset-0 d-flex flex-column ">
                        <div class="cert-img col-lg-12  m-auto col-10">
                            <img src="../../storage/{{$page->image}}" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
                @else
                @php
                echo $page->text_2
                @endphp
                @endif


                <h3 class="red fw-bold text-center mb-4">
                    What People Say About {{$page->title}}
                </h3>
                <div class="owl-carousel owl-home-carousel owl-home-qualifications ow-theme">
                    @foreach($testimonial as $item)
                    <div class="col-12">

                        <div class="d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-quote-left"
                                style="color: #1d1a3d;font-size:2.5em;margin:20px 20px 65px 20px"></i>

                            <div class="d-flex flex-column w-50">
                                @php
                                echo $item->content
                                @endphp
                                <p style="text-align: center;color:rgb(105, 105, 105);" class=" fw-bold  "> <i>

                                        {{$item->name}} -
                                        {{$item->country}} </i> </p>
                            </div>
                            <i class="fa-solid fa-quote-right " style="color: #1d1a3d;font-size:2.5em;margin:20px"></i>
                        </div>

                    </div>
                    @endforeach
                </div>


            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
            $('.owl-home-qualifications').owlCarousel({
                margin: 0,
                loop: true,
                autoplay: true,
                item: 1,
                autoplayTimeout: 90000,
                autoplayHoverPause: true,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1
                    }
                }
            });


   

            $('.owl-home-certs').owlCarousel({
                margin: 0,
                loop: true,
                autoplay: false,
                item: 4,
                autoplayTimeout: 3000,
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