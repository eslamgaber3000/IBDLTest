@extends('layout-new')

@section('websit_content')

<section class="inner-hero">
    <img src="{{ asset('../../images/header/signup.jpg') }}" alt="">
    <div class="container">
        <h1 style="right:10%" class="hero-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            SIGN UP
        </h1>
        <h1 style="right:10%" class="hero-subtitle aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            Let Us Know A Little About You
        </h1>
    </div>

</section>

<section>
    <div class=" my-3">
        <div style="margin:auto;background-color:#1d1a3d;height:60em;width:100%;position:relative" class="">
            <div style="background-color:#e30618;height:12em;width:100%;position: absolute;top:30em;margin-top:-6em"
                class="d-none d-lg-block">
                <img style="margin-top:32px;margin-left:6vw" src="{{ asset('../../images/IBDL_Red.png') }}" width="180"
                    height="auto" alt="">
            </div>
            <div class="sign-up" class="card">
                <div class="card-body p-5">

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div id="reg-img" style="margin-top: -110px;cursor:pointer" class="reg-img">
                            <img id="image" class="image" src="{{asset('../../images/person.jpg')}}" alt="">
                            <p class="reg-p text-center">
                                Upload Your Photo
                            </p>

                            <input accept="image/png, image/gif, image/jpeg"
                                style="opacity:0;height:inherit;width:100%;cursor:pointer" class="" type="file"
                                id="imgInp" name="avatar">

                        </div>

                        <!-- Name -->
                        <div class="d-flex mt-2 row">
                            <div class="col ps-0">
                                <x-input-label for="fname" :value="__('First Name')" />
                                <x-text-input id="fname" class="form-control" type="text" name="fname"
                                    :value="old('fname')"  autocomplete="name" />
                                <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                            </div>
                            <div class="col pe-0">
                                <x-input-label for="lname" :value="__('Last Name')" />
                                <x-text-input id="lname" class="form-control" type="text" name="lname"
                                    :value="old('lname')"  autocomplete="name" />
                                <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Email Address -->
                        <!-- Name -->
                        <div class="d-flex mt-2 row">
                            <div class="col ps-0 mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email"
                                    :value="old('email')"  autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="col pe-0 mt-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input name="phone" type="tel" class="form-control" id="phone">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                        </div>
                   
                   
                        <div class="d-flex row mt-2">
                            <div class="mt-4 col ps-0">
                                <label for="country"> Country</label>
                                <select id="country" name="country" required style="color:#212529" class="form-select"
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
                            <div class="mt-4 col pe-0">
                                <label for="city"> City</label>
                                <input id="city" class="form-control" type="text" name="city" />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row">
                            <div class="mt-4 col ps-0">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control" type="password" name="password"
                                     autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4 col pe-0">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="form-control " type="password"
                                    name="password_confirmation"  autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <p class="fw-bold me-4">Gender</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                                <label class="form-check-label fw-bold" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="0">
                                <label class="form-check-label fw-bold" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4 text-end">
                            <x-primary-button class="ml-4 btn btn-warning fw-bold ">
                                Sign Up
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
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








{{--
<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" 
            autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" 
            autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" 
        
            autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
             autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ml-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form> --}}