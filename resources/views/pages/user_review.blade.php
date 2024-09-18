@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>$page->title,'breadcrumb'=>
$page->breadcrumb,'header'=>$page->header,'icon'=>$page->icon])
<section>
    <div style="background-color: #e8e8e8" class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <div class="top-section d-flex flex-wrap">
                    <img src="../../images/IBDL_Red.png" class="me-5" width="200" height="auto" alt="">
                    <div class="d-flex flex-column">
                        <h1 style="font-size: 3em;font-weight:600">IBDL LEARNING GROUP</h1>
                        <p style="font-size: 1.2em;font-weight:600"> {{$reviews_count}} Total Reviews</p>
                        <div class="review">
                            <div class="ratings mb-2">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:{{$star_rating}}%"></div>
                            </div>
                            <b style="font-size: 1.5em;color:#e30618" class="fw-bold mx-2">{{$all_rate}}</b>
                        </div>
                    </div>
                </div>
                <div class="review-section">

                    <b> Reviews </b>
                    <i class="fa-solid fa-star" style="color: #e30618;"></i>
                    <b style="font-size: 1.5em;color:#e30618" class="fw-bold mx-2">{{$all_rate}}</b>
                    <br>
                    <small> <i> {{$reviews_count}} Total </i> </small>

                    <div class="d-flex justify-content-center align-items-center">
                        <b class="me-1" style="display: inline">5</b>
                        <small class="me-2" style="display: inline"> <b> Stars </b></small>
                        <div style="display: inline-block;width:100%" class="progress" role="progressbar"
                            aria-valuenow="{{$rating_5}}" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{$rating_5}}%;height:100%"></div>
                        </div>
                        <b class="ms-2" style="display: inline-block">{{$rating_5}}%</b>
                    </div>


                    <div class="d-flex justify-content-center align-items-center">
                        <b class="me-1" style="display: inline">4</b>
                        <small class="me-2" style="display: inline"> <b> Stars </b></small>
                        <div style="display: inline-block;width:100%" class="progress" role="progressbar"
                            aria-valuenow="{{$rating_4}}" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{$rating_4}}%;height:100%"></div>
                        </div>
                        <b class="ms-2" style="display: inline-block">{{$rating_4}}%</b>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <b class="me-1" style="display: inline">3</b>
                        <small class="me-2" style="display: inline"> <b> Stars </b></small>
                        <div style="display: inline-block;width:100%" class="progress" role="progressbar"
                            aria-valuenow="{{$rating_3}}" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{$rating_3}}%;height:100%"></div>
                        </div>
                        <b class="ms-2" style="display: inline-block">{{$rating_3}}%</b>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <b class="me-1" style="display: inline">2</b>
                        <small class="me-2" style="display: inline"> <b> Stars </b></small>
                        <div style="display: inline-block;width:100%" class="progress" role="progressbar"
                            aria-valuenow="{{$rating_2}}" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{$rating_2}}%;height:100%"></div>
                        </div>
                        <b class="ms-2" style="display: inline-block">{{$rating_2}}%</b>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <b class="me-1" style="display: inline">1</b>
                        <small class="me-2" style="display: inline"> <b> Star </b></small>
                        <div style="display: inline-block;width:100%" class="progress" role="progressbar"
                            aria-valuenow="{{$rating_1}}" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{$rating_1}}%;height:100%"></div>
                        </div>
                        <b class="ms-2" style="display: inline-block">{{$rating_1}}%</b>
                    </div>
                </div>

                @if(Route::has('login'))
                @auth

                <div class="open-review">
                    @if(session('message') !== null)
                    <h5 style="color: green" class="text-center mb-3 fw-bold">{{session('message')}} <i
                            class="fa-solid fa-square-check" style="color:green;"></i></h5>
                    @endif

                    @if(count($errors) > 0 )
                    <p style="color: red" class="text-center mb-3 fw-bold">*{{$errors->first()}}*</p>
                    @endif

                    <form method="POST" action="{{ route('reviews') }}" class="needs-validation">
                        @csrf
                        <div class="input-group has-validation">
                            <div class="mb-4 ">
                                <h3 style="display: inline">Rate your recent experience
                                </h3>
                                <div dir="rtl" class="rate">
                                    <input required type="radio" id="star5" name="rate" value="5" />
                                    <label onclick="rate()" for="star5" title="text">5 stars</label>
                                    <input required type="radio" id="star4" name="rate" value="4" />
                                    <label onclick="rate()" for="star4" title="text">4 stars</label>
                                    <input required type="radio" id="star3" name="rate" value="3" />
                                    <label onclick="rate()" for="star3" title="text">3 stars</label>
                                    <input required type="radio" id="star2" name="rate" value="2" />
                                    <label onclick="rate()" for="star2" title="text">2 stars</label>
                                    <input required type="radio" id="star1" name="rate" value="1" />
                                    <label onclick="rate()" for="star1" title="text">1 star</label>
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a rate.
                                </div>
                            </div>
                            <div id="title" class="col-12 toggle-visibilty">
                                <Label style="font-size:1.1em" class="fw-bold mb-2" for="title"> Give Your Review a
                                    Title</Label>
                                <input name="title" type="text" placeholder="Enter Your Title" class="form-control"
                                    id="title" required>
                                <div class="invalid-feedback">
                                    {{-- @if(isset($errors['title']) )
                                    <h1 style="color: red" class="text-center fw-bold">{{$errors['title']}}</h1>
                                    @endif --}}
                                </div>
                            </div>

                            <div id="subject" class="col-12 mt-3 mb-4 toggle-visibilty">
                                <Label style="font-size:1.1em" class="fw-bold mb-2" for="review"> Tell us More About
                                    Your
                                    Experience</Label>
                                <textarea name="subject" style="height: 120px" id="review"
                                    placeholder="Enter Your Review" class="form-control" required></textarea>
                                <div class="invalid-feedback">
                                    {{-- @if(count($errors) > 0 && isset($errors['subject']) )
                                    <h1 style="color: red" class="text-center fw-bold">{{$errors['subject']}}</h1>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                        <div id="submit" class="text-end toggle-visibilty">
                            <button class="btn btn-danger" type="submit">Submit Review</button>
                        </div>
                    </form>

                </div>
                @else
                <div class="closed-review text-center">
                    <h1 class="" style="font-size: 1.7em;font-weight:600">
                        <i class="fa-solid fa-lock" style="color: #1d1a3d;"></i> You need to be registered to add
                        review
                    </h1>
                    <a href="{{ route('register') }}"> <button class="btn btn-warning button fw-bold mt-4"> Sign
                            Up</button>
                    </a>
                </div>

                @endauth
                @endif


                @foreach($reviews as $review)
                <div class="reviews">
                    <div class="d-flex align-items-start">
                        <img style="border:1px solid gray" src="../../storage/avatars/{{$review->user['avatar']}}"
                            class="user-img" alt="">
                        <div class="my-auto ms-4">
                            <span class=""> <b> {{$review->user['name']}} </b></span>
                            {{-- <small> 1 Review</small> --}}
                        </div>
                        <p style="color:#797979;" class="my-auto ms-4"> <i class="fa-sharp fa-solid fa-location-dot"
                                style="color: #797979;"></i>
                            {{$review->user['country']}}</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="review">
                            <div class="ratings mb-2">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:{{$review->rate/5 * 100}}%"></div>
                            </div>
                            <b style="font-size: 1.2em;color:#e30618" class="fw-bold mx-2">{{$review->rate}}/5</b>
                        </div>
                        <small style="color: #797979"> {{$review->elapsed}} </small>
                    </div>
                    <div class="d-flex flex-column mb-2 mt-2">
                        <h5>
                            <b> {{$review->title}} </b>
                        </h5>
                        <p>
                            {{$review->subject}}
                        </p>
                    </div>
                    <small> <b>Date of experience:</b> {{ date("F d, Y", strtotime($review->date))}}
                    </small>
                </div>
                @endforeach

                {{$reviews->links()}}
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>

<script>
    function rate() {
        const title = document.getElementById('title') ;
        const subject = document.getElementById('subject') ;
        const submit = document.getElementById('submit') ;
        title.classList.remove('toggle-visibilty');
        subject.classList.remove('toggle-visibilty');
        submit.classList.remove('toggle-visibilty');
    
    }
</script>
@endsection