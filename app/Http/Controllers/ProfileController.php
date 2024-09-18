<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        if ($request->hasFile('avatar')) {
           
            $path = Storage::disk('public')->put('avatars', $request->file('avatar'));
            $path = substr($path, 8);

            // $path = Storage::putFile('public/images', $request->file('avatar'));
            // $path = substr($path, 7);
            // dd($request,$path);
            $user = User::where('id',Auth()->user()->id)->first();
            $user->avatar = $path;
            $user->lastName = $request->lastName;
            $user->lastName = $request->name;
            $user->lastName = $request->phone;
            $user->lastName = $request->position;
            $user->lastName = $request->address;

            $user->save();
        }
        
        // $request->user()->save();

        return Redirect::route('dashboard')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);


        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
