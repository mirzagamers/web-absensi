<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function loadLogin()
    {
        $title = 'Login'; // Definisi variabel $title
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login', compact('title')); // Mengirimkan variabel $title ke view
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $userCredential = $request->only('email', 'password');

        if(Auth::attempt($userCredential)){
            $route = $this->redirectDash();
            return redirect($route);
        } else {
            return back()->with('error', 'Email & Password is incorrect');
        }
    }

    public function redirectDash()
    {
        if(Auth::user()->role == 1){
            return route('dashboard'); // Assuming admin dashboard route is named 'dashboard'
        } elseif(Auth::user()->role == 2){
            return route('dashboard-karyawan'); // Assuming karyawan dashboard route is named 'karyawan'
        } elseif(Auth::user()->role == 3){
            return route('dashboard-manager'); // Assuming manajer dashboard route is named 'manajer'
        } else {
            // Handle cases where user's role doesn't match any condition
            return '/'; // Redirect to default dashboard or error page  
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}; 
