<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function loginView()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
       //
    }

    public function create()
    {
        return view('pages.secretaireform');
    }

    public function index()
    {
        return view('pages.secretaire');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            switch ((int) Auth::user()->role_id) {
                case 1:
                    $request->session()->regenerate();
                    return redirect()->route('home');
                    break;
                case 2:
                    return redirect()->route('home');
                    break;
            }
        } else return Redirect::back()->with('error', 'Email ou mot de passe incorrect!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}

