<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
    
        
        $request->validate([
           'avatar' => ['image', 'max:2048', 'mimes:jpeg,jpg,png,gif'],
            'fname' => ['required', 'string', 'max:100'], 
            'lname' => ['required', 'string', 'max:100'], 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
           'phone' => ['required', 'unique:users'],
         
            'gender' => ['required'], 
            'password' => ['required', 'confirmed', Rules\Password::defaults()], // Password is required, must be confirmed, and must meet Laravel's default password rules
        ]);

        
        // $imagePath = $request->file('avatar')->store();
        if($request->file('avatar')){
            $filename = time().'.'.'png';
            $path = Storage::disk('public')->put('avatars', $request->file('avatar'));
            $path = substr($path, 8);
        }else{
            $fletter = substr($request->fname, 0, 1);
            $lletter = substr($request->lname, 0, 1);

            $img = Image::make('storage/avatars/1.png');
            $img->text($fletter. $lletter,380 , 380, function ($font) {
                $font->file(public_path('fonts/Aeonik/AeonikTRIAL-Bold.otf'));
                $font->size(300);
                $font->color('#1d1a3d');
                $font->align('center');
                $font->angle(0);
            });
            $filename = time().'.'.'jpg';
            $img->resize(150, 150)->save('storage/avatars/'.$filename);

            $path = $filename ;
        }
      
        $user = User::create([
            'avatar' => $path,
            'name' => $request->fname,
            'lastname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
        ]);
      

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
