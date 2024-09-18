@extends('layout-new')

@section('websit_content')
@include('include.header',['title'=>'Request Customized Training','breadcrumb'=>'Our Services/Request Customized
Training','header'=>'pages/services.jpg','icon'=>'pages/services.png'])
<div class="container-fluid">
    <div class="row">
        <div style="margin:5em auto" class="col-lg-8 col-11 offset-0">
            @if (Session::has('message'))
            <div class="modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
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
            <h3 style="color:#e30618">Organization Information</h3>
            <form method="POST" action="{{ route('custom_training') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 mt-4 row">
                    <div class="col ps-0">
                        <input required name="name" type="text" class="form-control" aria-label="Organization Name"
                            placeholder="Organization Name">
                    </div>
                    <div class="col pe-0">
                        <input name="title" required type="text" class="form-control" placeholder="Title"
                            aria-label="Title">
                    </div>

                </div>
                <div class="row mb-4">
                    <div class="col ps-0">
                        <input name="phone" required type="number" class="form-control" placeholder="Phone"
                            aria-label="Phone">
                    </div>
                    <div class="col pe-0">
                        <input name="email" required type="email" class="form-control" placeholder="Email"
                            aria-label="Email">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col ps-0">
                        <input name="department" required type="text" class="form-control" placeholder="Department"
                            aria-label="Department">
                    </div>
                    <div class="col pe-0">
                        <input name="division" required type="text" class="form-control" placeholder="Division"
                            aria-label="Division">
                    </div>
                </div>
                <div class="row mb-3">
                    <label style="color: gray;font-size: 0.9em;padding-left: 0.2em;" for="completion_date">Expected
                        Completion Date</label>
                    <input name="completion_date" id="completion_date" required type="date" class="form-control"
                        placeholder="Completion Date" aria-label="Completion Date">
                </div>
                <div class="row mb-4">
                    <label style="color: gray;font-size: 0.9em;padding-left: 0.2em;" for="preferred_sessions">
                        Preferred Format for Sessions
                    </label>
                    <select required id="preferred_sessions" name="preferred_sessions" class="form-select">
                        <option disabled selected>Open this select menu</option>
                        <option value="In-Person">In-Person</option>
                        <option value="Virtual">Virtual</option>
                        <option value="Flexible">Flexible</option>
                    </select>
                </div>

                <div class="row mb-4">
                    <div class="col ps-0">
                        <input name="audience" required type="text" class="form-control" placeholder="Target Audience"
                            aria-label="Target Audience">
                    </div>
                    <div class="col pe-0">
                        <input name="audience_size" required type="number" class="form-control"
                            placeholder="Target Audience Size" aria-label="Target Audience Size">
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="form-label" style="color: gray;font-size: 0.9em;padding-left: 0.2em;"
                        for="description">
                        Description
                    </label>
                    <textarea required class="form-control" name="description" id="description" cols="2" rows="2">
                    </textarea>
                </div>
                <div class="row mb-4">
                    <label class="form-label" style="color: gray;font-size: 0.9em;padding-left: 0.2em;" for="outcome">
                        Desired Outcome
                    </label>
                    <textarea required class="form-control" name="outcome" id="outcome" cols="2" rows="2">
                    </textarea>

                </div>
                <div class="row mb-4">
                    <label class="form-label" style="color: gray;font-size: 0.9em;padding-left: 0.2em;"
                        for="additional_info">
                        Additional Info
                    </label>
                    <textarea required class="form-control" name="additional_info" id="additional_info" cols="2"
                        rows="2">
                    </textarea>
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
@endsection