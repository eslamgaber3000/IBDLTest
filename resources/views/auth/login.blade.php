@extends('layout-new')

@section('websit_content')

<section class="inner-hero">
    <img src="{{ asset('../../images/header/signup.jpg') }}" alt="">
    <div class="container">
        <h1 style="right:10%" class="hero-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">
            LOGIN
        </h1>
    </div>
</section>

<section>
    <div class="my-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card" style="border:1px solid lightgray;border-radius: 10px;box-shadow: -1px 2px 7px 0px black;background-color: #f8f8f8;">
                        <div class="card-body p-5 pb-4">
                            
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label style="color:black" for="email" class="form-label"><b>User Name</b></label>
                                    <x-text-input id="email" class="form-control" type="email" name="email" aria-placeholder="User Name" :value="old('email')" required />
                                    <x-input-error style="color:red" :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="mb-4">
                                    <label style="color:black" for="password" class="form-label"><b>Password</b></label>
                                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                    <x-input-error style="color:red" :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-warning button fw-bold px-4 py-2">Sign in</button>
                                </div>

                                <div class="d-flex mt-4 justify-content-center">
                                    <p style="color:black" class="mb-0 me-1">New Here?</p>
                                    <a style="color:black" href="{{ route('register') }}">
                                        <b>Sign Up</b>
                                    </a>
                                </div>
                            </form>
                            <button class="gg" onclick="window.location.href='{{ route('auth.Socialite.redirect', 'google') }}'">
                        <i class="fa-brands fa-google"></i> Login with Google
                    </button>
                    <hr >
                    <p class="text-center text-white"><b>OR</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
