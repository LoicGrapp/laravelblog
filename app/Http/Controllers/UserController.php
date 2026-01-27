<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register (Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        Auth::login($user);
        return redirect('/')->with('success', 'Thank you for creating an account');
    }

    public function login (Request $request) {
        $incomingFields = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
        ]);
        if (Auth::attempt(['username' => $incomingFields['loginusername'], 
                            'password' => $incomingFields['loginpassword']])) {
                                return redirect('/') -> with('success', 'Vous êtes connectés');
                            } else {
                                return redirect('/')->with('error', 'Login invalide !');
                            }
    }

    public function showConnectedHomepage () {
        if (Auth::check()) {
            $posts = Post::with('user')->get();
            return view('homepage-connected', [
                'posts'=> $posts
            ]);
        } else {
            return(view('homepage'));
        }
    }

    public function logout () {
        Auth::logout();
        return redirect('/')->with('success', 'Vous avez été déconnecté.');
    }
}
