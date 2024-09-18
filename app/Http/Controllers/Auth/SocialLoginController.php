<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callBack($provider)
    {
        $provider_user = Socialite::driver($provider)->user();

        // Check if the user already exists in the database
        $user = User::where([
            'provider' => $provider,
            'provider_id' => $provider_user->id,
        ])->first();

        // If the user does not exist, create a new user
        if (!$user) {
            $user = User::create([
                'name' => $provider_user->name,
                'email' => $provider_user->email,
                'provider' => $provider,
                'provider_token' => $provider_user->token,
                'provider_id' => $provider_user->id,
                'password' => Hash::make(Str::random(8)),
                'email_verified_at' => now(),
                 
            ]);
        }

        // Log in the user
        Auth::login($user);

        // Redirect to home page or any desired route
        return redirect(RouteServiceProvider::HOME);
    }
}
