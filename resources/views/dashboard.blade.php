@extends('layout-new')
<style>
    ul li .active {
        color: white !important
    }

    ul li button {
        color: gray
    }
</style>
@section('websit_content')

<section style="background-color: black" class="inner-hero">
    <img style="opacity: 0.6" src="{{ asset('../../images/header/signup.jpg') }}" alt="">
    <div class="container">
        <h1 class="hero-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            {{-- Dashboard --}}
        </h1>
    </div>

</section>
<section style="overflow: visible" class="d-flex container">
    <div style="height: initial;border-top-left-radius:14px;border-top-right-radius:14px;margin-top:-50px;z-index:5"
        class="sidebar-container me-0 col-4">
        <div style="background-color: #e30618;height:100px;border-top-left-radius:14px;border-top-right-radius:14px"
            class="text-center">
            <img style="margin-bottom:-50px;width:11em;margin:1.3em auto;border-radius:100%;height:11em"
                src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
        </div>
        <h4 class="text-center " style="margin-top: 4.8em;color:white">{{Auth::user()->name}}</h4>
        <p class="text-center mt-2" style="color:#e30618"> {{Auth::user()->email}} </p>
        <div class="cor-side-com sidebar">
            <div class="cor-side-com">
                <div class="logo-section mt-3">
                    <img src="../../images/IBDL_Red.png" alt="">
                </div>
            </div>
        </div>
        <div class="text-center mt-5 mb-5">
            <ul class="nav nav-tabs flex-column " id="myTab" role="tablist" style="border:0">
                <li class="mb-3" role="presentation">
                    <button style="background-color: transparent;" class="fw-bold active" id="info" data-bs-toggle="tab"
                        data-bs-target="#info-pane" type="button" role="tab" aria-controls="info-pane"
                        aria-selected="true">Personal Info</button>
                </li>
                <li class="mb-3" role="presentation">
                    <button style="background-color: transparent;" class="fw-bold" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="false">Update Info</button>
                </li>
                <li class="mb-3" role="presentation">
                    <button style="background-color: transparent;" class="fw-bold" id="review-tab" data-bs-toggle="tab"
                        data-bs-target="#review-tab-pane" type="button" role="tab" aria-controls="review-tab-pane"
                        aria-selected="false">My Reviews</button>
                </li>
                <li class="mb-3" role="presentation">
                    <button style="background-color: transparent;" class="fw-bold" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">Purchased Items</button>
                </li>
                {{-- <li class="mb-3" role="presentation">
                    <button style="background-color: transparent;" class="fw-bold" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                        aria-selected="false">Certificates</button>
                </li> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="color: #e30618;background-color: transparent;"
                        class="fw-bold mb-3">Sign Out</button>
                </form>
            </ul>
        </div>
    </div>




    <div class=" col-12 col-md-7 offset-1">
        <div style="margin:5em 0 0 0em" class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active " id="info-pane" role="tabpanel" aria-labelledby="info" tabindex="0">
                <div class="d-flex flex-column">
                    <div class="d-flex">
                        <div class="col-3">
                            <h6 class="d-inline-block me-2 mb-4 fw-bold" style="color: #979797">Name </h6>
                        </div>
                        <div class="col-5">
                            <h6 class="fw-bold d-inline-block mb-4">{{Auth::user()->name}} &nbsp;{{
                                Auth::user()->lastName}}
                            </h6>
                        </div>
                    </div>
            
              
                    <div class="d-flex">
                        <div class="col-3">
                            <h6 class="d-inline-block me-2 mb-4 fw-bold" style="color: #979797">Email Address </h6>
                        </div>
                        <div class="col-5">
                            <h6 class="fw-bold d-inline-block mb-4">{{Auth::user()->email}}</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-3">
                            <h6 class="d-inline-block me-2 mb-4 fw-bold" style="color: #979797">Mobile Number </h6>
                        </div>
                        <div class="col-5">
                            <h6 class="fw-bold d-inline-block mb-4">{{Auth::user()->phone}}</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-3">
                            <h6 class="d-inline-block me-2 mb-4 fw-bold" style="color: #979797">Country </h6>
                        </div>
                        <div class="col-5">
                            <h6 class="fw-bold d-inline-block mb-4">{{Auth::user()->country}}</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-3">
                            <h6 class="d-inline-block me-2 mb-4 fw-bold" style="color: #979797">City </h6>
                        </div>
                        <div class="col-5">
                            <h6 class="fw-bold d-inline-block mb-4">{{Auth::user()->city}}</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-3">
                            <h6 class="d-inline-block me-2 mb-4 fw-bold" style="color: #979797">Certificates </h6>
                        </div>
                        <div class="col-5">
                            <h6 class="fw-bold d-inline-block mb-4"> <b> 0</b> certificates</h6>
                        </div>
                    </div>

                </div>

            </div>


            <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab-tab" tabindex="0">
                <h5 class="fw-bold mb-4">
                    UPDATE YOUR INFO
                </h5>


                <form method="post" action="{{ route('profile.update') }}" class="row g-3 mb-5"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="col-md-12">

                        <div id="reg-img" style="margin:0px 0 3em 1em;cursor:pointer;height:160px" class="reg-img">
                            <img id="image" class="image" src="{{asset('storage/avatars/'.Auth::user()->avatar)}}"
                                alt="">
                            <p class="reg-p" style="top:110%;left:20%;cursor:context-menu">
                                Change Photo
                            </p>

                            <input accept="image/png, image/gif, image/jpeg"
                                style="opacity:0;height:inherit;width:100%;cursor:pointer" class="" type="file"
                                id="imgInp" name="avatar">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="fname" class="form-label">First Name</label>
                        <input name="name" required value="{{Auth::user()->name}}" type="text" class="form-control"
                            id="fname">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input name="lastName" required value="{{Auth::user()->lastName}}" type="text"
                            class="form-control" id="lastName">
                    </div>

                    <div class="col-md-12">
                        <label for="phone" class="form-label">Phone</label>
                        <input name="phone" required value="{{Auth::user()->phone}}" type="tel" class="form-control"
                            id="phone">
                    </div>


              


                 
                    {{-- <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="city" id="inputCity">
                    </div> --}}

                    <div class="col-12">
                        <button type="submit" class="btn mt-3" style="background-color:#1d1a3d;color:white ">Save
                            All</button>
                    </div>
                </form>



            </div>

            <div class="tab-pane fade" id="review-tab-pane" role="tabpanel" aria-labelledby="review-tab" tabindex="0">
                @php
                use App\Models\review ;
                $reviews = review::where('user_id',Auth::user()->id)->get();
                @endphp

                @foreach($reviews as $review)
                <div style="margin-top: 3em;background-color:rgb(227, 227, 227);padding:2em;border-radius:8px"
                    class="mb-5">
                    <div class="d-flex align-items-start">
                        <img src="../../images/placeholder.jpg" class="user-img" alt="">
                        <div class="my-auto ms-4">
                            <span class=""> <b> {{$review->user['name']}} </b></span>
                            {{-- <small> 1 Review</small> --}}
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
            </div>


            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <h5 class="fw-bold mb-4">
                    Purchased Items
                </h5>


                <h1 style="color:lightgray;margin:3em 0 0 1em">
                    You Haven't Purchased Anything Yet
                </h1>
            </div>


            {{-- <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                tabindex="0">
                <h5 class="fw-bold mb-4">
                    Certificates
                </h5>


                <h1 style="color:lightgray;margin:3em 0 0 1em">
                    You Have No Certificates Yet
                </h1>
            </div> --}}
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                tabindex="0">...</div>
        </div>

    </div>
</section>
<script>
    function getImgData() {
  const files = chooseFile.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
    //   imgPreview.style.background = url(this.result);
    //   imgPreview.innerHTML = '<img src="' + this.result + '" />';
      imgPreview.style.display = "block";
      imgPreview.src = this.result;
    });    
  }
}

    const chooseFile = document.getElementById("imgInp");
    const imgPreview = document.getElementById("image");
    chooseFile.addEventListener("change", function () {
    getImgData();
    });

</script>
@endsection





<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
    <img src="{{asset('storage/'.Auth::user()->avatar)}}" alt="">
</x-slot>