@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="row cert-main">
                    <div style="font-size: 1.03em;"
                        class="col-lg-6 mb-5 col-10 offset-lg-0 offset-1 cert-first order-lg-0 order-1">
                        <div style="width:35%;height:auto;display:inline-flex">
                            <img src="../../storage/{{$page->logo}}" width="100%" height="auto" alt="">
                        </div>
                        @php
                        echo $page->paragraph_1
                        @endphp
                    </div>
                    <div
                        class="col-lg-5 mb-5 col-10 offset-lg-1 offset-1 d-flex flex-column order-lg-1 order-0 mt-lg-2">
                        <div class="d-flex row col-6">
                            <div style="align-self:center;align-items: center;"
                                class="col-6 d-flex flex-column justify-content-center">
                                <img src="../../images/icon/intake.png" width="45%" height="auto" alt="">
                                <b style="color: rgb(30, 149, 157)" class="pt-2"> Intakes</b>
                                <h2 class="red fw-bold"> {{$page->intakes}} </h2>
                            </div>
                            <div style="align-self:center;align-items: center;"
                                class="col-6 d-flex flex-column justify-content-center">
                                <img src="../../images/icon/hours.png" width="45%" height="auto" alt="">
                                <b style="color: rgb(30, 149, 157)" class="pt-2"> Hours</b>
                                <h2 class="red fw-bold"> {{$page->hours}} </h2>
                            </div>
                        </div>
                        <div class="d-flex col-6 row mt-lg-5">
                            <div style="align-self:center;align-items: center;"
                                class="col-6 d-flex flex-column justify-content-center">
                                <img src="../../images/icon/trainees.png" width="45%" height="auto" alt="">
                                <b style="color: rgb(30, 149, 157)" class="pt-2"> Trainess</b>
                                <h2 class="red fw-bold"> {{$page->trainees}} </h2>
                            </div>
                            <div style="align-self:center;align-items: center;"
                                class="col-6 d-flex flex-column justify-content-center">
                                <img src="../../images/icon/counter.png" width="45%" height="auto" alt="">
                                <b style="color: rgb(30, 149, 157)" class="pt-2"> Counter</b>
                                <h2 class="red fw-bold"> {{$page->counter}} </h2>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                echo $page->paragraph_2
                @endphp
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