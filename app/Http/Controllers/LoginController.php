<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function loginView()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);

       User::create([
           "role_id" =>2,
            "firstname" =>$request->firstname,
            "lastname" =>$request->lastname,
            "email" =>$request->email,
            "numero" =>$request->numero,
            "photo" =>$request->photo,
            "password" =>Hash::make($request->password),

        ]);


        return back()->with('message', 'Enregistrement effectué avec succès!');
    }

    public function create()
    {
        return view('pages.secretaireform');
    }

    public function destroy($id){
        $users=User::find($id);
        $users->delete();
        return back()->with('message', 'Suppression éffectué avec succès');
    }

    public function index()
    {
        $users = User::all();
        return view('pages.secretaire', compact('users'));    }
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


