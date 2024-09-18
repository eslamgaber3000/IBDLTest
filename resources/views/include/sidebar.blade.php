<div class="sidebar-container">
    <div class="cor-side-com sidebar">

        <div class="cor-side-com">
            <div style="margin:3em 0" class=" qualifications-section">

                <div class="first-col ">
                    <div class="img-col1 mx-1 mb-2">
                        <a href="{{url('pages/'.'assessment')}}"> <img src="../../images/services/white/Assessment.png"
                                alt=""></a>
                    </div>
                    @if (session('ver') === 'Center' || session('ver') === 'Trainee')

                    @else
                    <div class="img-col1 mx-1 mb-2">
                        <a href="{{url('pages/'.'education')}}"> <img src="../../images/services/white/Education.png"
                                alt=""></a>
                    </div>
                    @endif
                    <div class="img-col1 mx-1 mb-2">
                        <a href="{{url('pages/'.'qualifications')}}"> <img
                                src="../../images/services/white/Qualifications.png" alt=""></a>
                    </div>
                    @if (session('ver') === 'Trainee')
                    @else
                    <div class="img-col1 mx-1 mb-2">
                        <a href="{{url('pages/'.'simulation')}}"> <img src="../../images/services/white/Simulation.png"
                                alt=""></a>
                    </div>
                    @endif
                    <div class="img-col1 mx-1 mb-2">
                        <a href="{{url('pages/'.'service')}}"> <img src="../../images/services/white/Services.png"
                                alt=""></a>
                    </div>
                    @if (session('ver') === 'corporate' || session('ver') === 'Center')

                    @else
                    <div class="img-col1 mx-1 mb-2">
                        <a href="{{url('pages/'.'accreditation')}}"> <img
                                src="../../images/services/white/Accreditation.png" alt=""></a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="logo-section">
                <img src="../../images/IBDL_Red.png" alt="">
            </div>

            <div class="logo-word-section">
                <p>INSPIRE TO LEARN</p>
            </div>
            {{--
            <div class="side-news mt-4">
                <h3 class="title heading" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    {{ __('Latest News') }}
                </h3>
                <div class="owl-carousel owl-carousel-basic owl-theme">
                    @foreach (\App\News::orderBy('id', 'desc')->limit(4)->get() as $news)
                    <div class="item">
                        <img src="{{ Storage::disk('public')->url($news->img) }}" class="img-fluid"
                            alt="{{ $news->title }}">
                        <div class="caption">
                            <span>{{ $news->title }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="side-news mt-4">
                <h3 class="title heading" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    {{ __('Our Certificate') }}
                </h3>
                <div class="owl-carousel owl-carousel-certs owl-theme">
                    @foreach (\App\Discover::orderBy('id')->get() as $cert)
                    <div class="item">
                        <img src="{{ Storage::disk('public')->url($cert->img) }}" class="img-fluid"
                            alt="{{ $cert->title }}">

                    </div>
                    @endforeach
                </div>
            </div>
            <div class="side-news mt-4  ">
                <h3 class="title heading" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    {{ __('Accreditation') }}
                </h3>
                <div class="item-accreditation position-relative mb-3">
                    <div class="item">
                        <img src="{{ asset('site/images/sidemenu-1.png') }}" class="img-fluid" alt="">
                        <div class="caption">
                            <a href="{{url('pages/'.'training-accreditation')}}"> <span>{{ __('Accredited Training
                                    Centers')
                                    }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-accreditation position-relative mb-3">
                    <div class="item">
                        <img src="{{ asset('site/images/sidemenu-2.png') }}" class="img-fluid" alt="">
                        <div class="caption red-caption">
                            <a href="{{url('pages/'.'trainers-accreditation')}}">
                                <span>{{ __('Accredited trainer') }}</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="item-accreditation position-relative mb-3">
                    <div class="item">
                        <img src="{{ asset('site/images/sidemenu-3.png') }}" class="img-fluid" alt="">
                        <div class="caption">
                            <a href="{{url('pages/'.'exam-accreditation')}}">
                                <span>{{ __('Accredited testing centers') }}</span>
                            </a>
                        </div>
                    </div>
                </div>







            </div> --}}
        </div>







    </div>
</div>