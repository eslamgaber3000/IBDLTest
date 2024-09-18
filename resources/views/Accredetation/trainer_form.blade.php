@extends('layout-new')

@section('websit_content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
    .swal-text {
        text-align: justify;
    }
    .gender .select-wrapper{
        width:100% !important;
        border-top-right-radius: 6px !important;
        border-bottom-right-radius: 6px !important;
        border-right: 1px !important;
    }
</style>

@if(session()->has('message'))
<script type="text/javascript">
    swal({
        title: 'Message',
        text: "{!! Session::get('message') !!}",
        timer: 3000000,
        type: 'errors'
    }).then((value) => {
        //location.reload();
    }).catch(swal.noop);
</script>
@endif
<section class=" mt-10">
<div class="  com-sp pad-bot-70 pg-inn container p-4">

    <div class="col-md-12 col-sm-12 col-xs-12"  style="padding: 23px 0%;">
        <div>
            <div class="col-md-9">
                <h2 class="cor-p1" style="margin-top: 35px;
                margin-bottom: 35px;text-transform: uppercase;">IBDL-Certified trainer Information
                </h2>
                <img src="{{ asset( 'images/Trainer.jpg' )}}"  style="width:100%;margin-bottom:3%"  alt="">

                @if($errors->any())
                {!! implode('', $errors->all('<div style="color: red;">:message</div>')) !!}
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('accredetation.trainer') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">title:</label>
                        <div class="col-sm-9">
                            <input name="title" type="text" class="form-control" placeholder="title" required>
                        </div>
                    </div>
                    <div class="d-flex mb-3 gender">
                        <label class="control-label col-sm-3">Gender:</label>
                        <div class="col-sm-9">
                            <select name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Date of Birth:</label>
                        <div class="col-sm-9">
                            <input name="date_of_birth" type="date" class="form-control" placeholder="date_of_birth">
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Forenames:</label>
                        <div class="col-sm-9">
                            <input name="forenames" type="text" class="form-control" placeholder="forenames" required>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Family Name (Surname): </label>
                        <div class="col-sm-9">
                            <input name="surname" type="text" class="form-control" placeholder="Family Name (Surname)" required>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Preferred Name :</label>
                        <div class="col-sm-9">
                            <input name="preferred_name" type="text" class="form-control" placeholder="Preferred Name " required>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">IBDL Membership no :</label>
                        <div class="col-sm-9">
                            <input name="membership" type="text" class="form-control" placeholder="IBDL Membership no " required>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Company Name :</label>
                        <div class="col-sm-9">
                            <input name="company_name" type="text" class="form-control" placeholder="Company Name " required>
                        </div>
                    </div>



                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Company Address:</label>
                        <div class="col-sm-9">
                            <textarea name="company_address" cols="40" rows="8" placeholder="Company Address" aria-invalid="false" aria-required="true" required="required"></textarea>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Home Address:</label>
                        <div class="col-sm-9">
                            <textarea name="home_address" cols="40" rows="8" placeholder="Home Address" aria-invalid="false" aria-required="true" required="required"></textarea>
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Telephone (Include codes) :</label>
                        <div class="col-sm-9">
                            <input name="telephone" type="text" class="form-control" placeholder="Telephone (Include codes) ">
                        </div>
                    </div>


                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Email:</label>
                        <div class="col-sm-9">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>


                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Academic certification:</label>
                        <div class="col-sm-9">
                            <textarea name="academic_certification" cols="40" rows="8" placeholder="Academic certification" aria-invalid="false" aria-required="true" required="required"></textarea>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Professional certification:</label>
                        <div class="col-sm-9">
                            <textarea name="professional_certification" cols="40" rows="8" placeholder="Academic certification" aria-invalid="false" aria-required="true" required="required"></textarea>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <label class="control-label col-sm-3">Your Experience in Providing Training:</label>
                        <div class="col-sm-9">
                            <textarea name="experience" cols="40" rows="8" placeholder="Your Experience in Providing Training" aria-invalid="false" aria-required="true" required="required"></textarea>
                        </div>
                    </div>




                    <div class="d-flex mb-3">
                        <label for="image" class="control-label col-md-4 col-form-label text-md-right">Image</label>

                        <input type="file" name="image" class="form-control-file" value="{{ old('image') }}">

                    </div>





                    <div class="d-flex mb-3 mar-bot-0" style="padding: 20px;">
                        <div class="col-sm-offset-3 col-sm-9 d-grid gap-2" >
                           <button type="submit" value="APPLY NOW" class="btn btn-warning aos-init aos-animate text-white"> APPLY NOW </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- @include('include.sidebar'); --}}

        </div>
    </div>
</div>
</section>
<style>
    textarea {
        border: 1px solid #cecece;
        height: 75px;
        background: #fff;
        border-radius: 2px;
        margin-bottom: 4px;
        padding: 0px 15px;
        box-sizing: border-box;
        font-size: 14px;
        color: #000;
    }
</style>

@endsection
