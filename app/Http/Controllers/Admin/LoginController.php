<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function showLoginForm(): Response
    {
        return Inertia::render('Admin/Auth/Login', [
            'loginRoute' => route('admin.login'),  
        ]);
    }

    // متد لاگین
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('admin.dashboard'); // استفاده از نام روت
        }
    
        return back()->withErrors(['email' => 'اطلاعات وارد شده صحیح نیست.']);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}



