@extends('layout-new')

@section('websit_content')
<section class="inner-hero">
    <img style="width: -webkit-fill-available;" src="{{ asset('storage/pages/accreditations.jpg') }}" alt="">
    <div class="container">
        <h1 class="hero-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            Become Accredited
        </h1>
        <h1 class="hero-subtitle aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            Our Services/Become Accredited
        </h1>
    </div>
    <div class="icon-section">
        <img class="icon" src="{{ asset('storage/pages/services.png') }}" alt="">
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
                <h3 style="color:#e30618">Personal Information</h3>
                <p class="fw-bold">JOIN OUR TEAM OF TRAINERS</p>
                @if (Session::has('message'))
                <div class="modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="mod-header d-flex">
                                <h2 style="color: white;" class="modal-title m-auto" id="exampleModalLabel"> <i
                                        class="fa-solid fa-circle-check fa-lg" style="color: white;"></i> Success
                                </h2>
                                <button onclick="document.getElementById('exampleModal1').style.display = 'none'"
                                    type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body my-3">
                                <h4> <b> Many thanks for your registration request! </b></h4>

                                <h6>
                                    Please check your emails within a Week whether you have received a message with a
                                    confirmation link. Follow the instructions in the email to complete the registration
                                    request.</h6>
                            </div>
                            <div style="background-color: white" class="modal-footer py-3">

                                <a href="/">
                                    <button type="button" style="background-color: #e30618;color: white;"
                                        class="btn ms-4">Back to Home Page</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    (function() {
                    var modalx = document.getElementById("exampleModal1");
                    modalx.style.display = "block";
                    })();
                </script>
                @endif

                <form method="POST" action="{{ route('become_acc_trainer') }}" enctype="multipart/form-data">
                    @csrf
                    <input name="type" type="hidden" value="{{$type}}">
                    <div class="mb-3">
                        <input name="name" required type="text" class="form-control" aria-label="Name" id="org-name"
                            placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input name="email" required type="email" class="form-control" placeholder="Email"
                            aria-label="Email">
                    </div>
                    <div class="mb-3">
                        <input name="phone" required type="tel" class="form-control" placeholder="Phone"
                            aria-label="Phone">
                    </div>
                    <select name="gender" required class="form-select mb-3" aria-label="Select Gender">
                        <option selected>Select Gender</option>
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                    <div class="row mb-3 px-0">
                        <div class="ps-0 col">
                            <input name="title" required type="text" class="form-control" placeholder="Title"
                                aria-label="Title">
                        </div>
                        <div class="pe-0 col">
                            <input name="company" type="text" class="form-control" placeholder="Company"
                                aria-label="Company">
                        </div>
                    </div>
                    <div class="row mb-3 px-0">
                        <div class="col ps-0">
                            <input name="training_field" required type="text" class="form-control"
                                placeholder="Training Field" aria-label="Training Field">
                        </div>
                        <div class="col pe-0">
                            <input name="training_hours" type="number" class="form-control"
                                placeholder="How Many Training Hour" aria-label="Training Hour">
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="brief" class="form-control" placeholder="Write Brief On Yourself"
                            id="floatingTextarea" style="height: 100px"></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col ps-0">
                            <select name="country" required style="color:#212529" class="form-select"
                                aria-label="Select Your Country">
                                <option style="color:#212529" selected> Select Your Country </option>
                                <?php
                                use App\Models\Country;
                                $all_country=Country::orderBy('short_name','asc')->get();
                                foreach ($all_country as $all_countries) { ?>
                                <option value="{{ $all_countries->short_name }}">
                                    {{ $all_countries->short_name }}
                                </option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="col pe-0">
                            <input name="city" required type="text" class="form-control" placeholder="City"
                                aria-label="City">
                        </div>
                    </div>

                    <div class="mb-3 d-flex align-items-baseline">
                        <p class="fw-bold col-5">Upload CV <b class="red">*</b></p>
                        <input name="cv" required class=" file-input col-5" type="file" id="formFile">
                    </div>

                    {{-- <div class="mb-3 d-flex align-items-baseline">
                        <p class="fw-bold col-5">Upload Any Certificate</p>
                        <input required class=" file-input col-5" type="file" id="formFile">
                    </div> --}}

                    <div class="text-end mt-5">
                        <button type="submit" class="btn acc-btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</section>
@endsection