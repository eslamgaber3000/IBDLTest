@extends('layouts.demo')
@section('websit_content')
<style>
    .section {
        background-color: #1d1a3d;
        min-height: 100vh;
        height: auto;
    }

    .title {
        padding: 100px 0 0 100px;

    }

    .title-text {
        color: white;
        font-weight: 800;
        font-size: 5em;
    }

    .container-sec {
        background-color: #e30618;
        height: 300px;
        width: 100%;
        margin: auto;
        margin-top: 30px;
        padding: 0 100px;
    }

    .text-w {
        color: white;
    }

    .text-b {
        color: black;
        font-size: 10px;
    }

    .question-sec {
        background-color: white;
        width: 37%;
        height: fit-content;
        min-height: 30em;
        padding: 5px 0;
        position: absolute;
        top: 15%;
        right: 13%;
        border-radius: 10px;
    }

    .footer {
        background-color: #e30618;
        font-size: 13px;
        position: fixed;
        bottom: 2%;
        width: 100%
    }

    .instructions {
        font-size: 0.95em;
        color: white;
    }

    .button {
        background-color: #e30618;
        color: white;
        font-weight: 600
    }

    .button:hover {
        background-color: #1d1a3d;
        color: white;
    }
</style>

<div class="section">
    <div class="title">
        <h1 class="title-text">
            DEMO EXAM
        </h1>
    </div>
    <div class="container-sec d-flex">
        <div class="col-5 d-flex flex-column mt-2">
            <h1 class="text-w mb-1">
                Instructions
            </h1>


            <div class="instructions">
                @php
                echo $ExamSetting['agreement']
                @endphp
                {{-- {{$ExamSetting['agreement']}} --}}
            </div>


        </div>
        <div class="question-sec">

            <div class="d-flex flex-column question-inner py-4 px-5">
                <div class="img col-3 mx-auto">
                    <img width="100%" height="auto" src="../../images/icon-white.png" alt="">
                </div>

                <form action="{{ route('Demo.DemoExamData') }}" method="POST" class="row  mt-4 needs-validation"
                    novalidate>
                    @csrf
                    <div class="col-12 mb-3 p-0">
                        <label for="validationCustom01"> Full Name</label>
                        <input disabled type="text" class="form-control" id="validationCustom01" placeholder="Full Name"
                            readonly value="{{$ExaminerData['name']}}">

                    </div>
                    <div class="col-12 mb-3 p-0">
                        <label for="validationCustom02"> Email</label>
                        <input disabled type="email" readonly value="{{$ExaminerData['logBook']}}" class="form-control"
                            id="validationCustom02" placeholder="Email" required>
                        {{-- <div class="invalid-feedback">
                            <small> Please Write Your Email. </small>
                        </div> --}}
                    </div>
                    <div class="col-12 mb-3 p-0">
                        <label for="validationCustomUsername">Birth Date</label>
                        <input disabled value="1990-01-01" type="date" class="form-control"
                            id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        {{-- <div class="invalid-feedback">
                            <small> Please Select Your Birth Date. </small>
                        </div> --}}
                    </div>
                    <div class="col-8 mt-4 mb-4 p-0">
                        <div class="form-check">
                            <input name="checked" class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                required>
                            <label class="form-check-label" for="invalidCheck">
                                I've Read the Instructions
                            </label>
                            <div class="invalid-feedback">
                                <small> You Must Read the Instructions Before Submitting.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-end mt-3 mb-4">
                        <button style="width:150px" class="btn button" type="submit">Confirm & Start</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div style="" class=" d-flex justify-content-center text-white ">
            2023 IBDL
            Learning Group. All Rights
            Reserved</div>
    </footer>
</div>
<script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
{{-- <section>
    <div class="form-container">
        <form class="form-login" action="{{ route('Demo.DemoExamData') }}" method="POST">
            @csrf
            <img src="{{ asset('site/images/fav.png') }}" alt="">
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Full Name" value="{{ $ExaminerData->name }}" readonly>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="E-Mail" value="jone@gmail.com" readonly>
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Birth Date"
                    value="2023-01-08" readonly>
            </div>
            <div class="mb-3 form-check">
                <div class="form-check-label-checkbox">
                    <input class="form-check-input" name="checked" type="checkbox" id="exampleCheck1"
                        style="margin-right: 3%;">
                    <label class="form-check-label" for="exampleCheck1">I've read the
                        instructions</label>
                    <button style="background: red" type="submit" class="btn">Confirm & Start</button>
                </div>
            </div>
            @error('checked')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
    </div>

</section> --}}
@endsection