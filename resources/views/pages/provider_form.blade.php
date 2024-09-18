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
                <h3 style="color:#e30618">Organization Information</h3>
                <p class="fw-bold">Become one of our services providers network</p>
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


                <form method="POST" action="{{ route('become_acc') }}" enctype="multipart/form-data">
                    @csrf
                    <input name="type" type="hidden" value="{{$type}}">
                    {{-- <input name="train_center" type="hidden" value="1"> --}}
                    <div class="mb-3">
                        <input required name="org_name" type="text" class="form-control" aria-label="Organization Name"
                            id="org-name" placeholder="Organization Name">
                    </div>
                    <div class="row mb-3">
                        <div class="col ps-0">
                            <input name="org_phone" required type="tel" class="form-control" placeholder="Phone"
                                aria-label="Phone">
                        </div>
                        <div class="col pe-0">
                            <input name="org_email" required type="email" class="form-control" placeholder="Email"
                                aria-label="Email">
                        </div>
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
                    <div class="mb-3">
                        <input name="website" type="text" class="form-control" aria-label="Website URL" id="org-name"
                            placeholder="Website URL">
                    </div>
                    <div class="mb-3 d-flex align-items-baseline">
                        <p class="fw-bold col-5">Upload Organization's Tax Registration <b class="red">*</b> </p>
                        <input name="tax_reg" required class=" file-input col-5" type="file" id="formFile">
                    </div>
                    <div class="mb-3 d-flex align-items-baseline">
                        <p class="fw-bold col-5">Upload Organization's Commercial Registration<b class="red">*</b></p>
                        <input name="commercial_reg" required class=" file-input col-5" type="file" id="formFile">
                    </div>
                    <div class="mb-3 d-flex align-items-baseline">
                        <p class="fw-bold col-5">Upload Organization's License<b class="red">*</b></p>
                        <input name="org_lic" class=" file-input col-5" type="file" id="formFile">
                    </div>
                    <div class="mb-3 d-flex align-items-baseline">
                        <p class="fw-bold col-5">Upload Organization's Quality Manual</p>
                        <input name="Qlty_man" class=" file-input col-5" type="file" id="formFile">
                    </div>
                    <div class="mb-5 d-flex align-items-baseline">
                        <p class="fw-bold col-5">Upload Accreditation</p>
                        <input name="accreditation" class=" file-input col-5" type="file" id="formFile">
                    </div>
                    <h3 class="mt-2 mb-3" style="color:#e30618">Contact Person</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <input name="con_name" required type="text" class="form-control" placeholder="Name"
                                aria-label="Name">
                        </div>
                        <div class="col">
                            <input name="con_title" required type="text" class="form-control" placeholder="Title"
                                aria-label="Title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input name="con_phone" required type="tel" class="form-control" placeholder="Phone"
                                aria-label="Phone">
                        </div>
                        <div class="col">
                            <input name="con_email" required type="email" class="form-control" placeholder="Email"
                                aria-label="Email">
                        </div>
                    </div>
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
<script>
    function close(){
        var modalx = document.getElementById("exampleModal1");
        modalx.style.display = "none";
    }
</script>