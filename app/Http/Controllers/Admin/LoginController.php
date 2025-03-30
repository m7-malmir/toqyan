<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // نمایش فرم ورود
    public function showLoginForm(): Response
    {
        return Inertia::render('Admin/Auth/Login', [
            'loginRoute' => route('admin.login'),  // ارسال مسیر لاگین به فرانت‌اند
        ]);
    }

    // متد لاگین
    public function login(Request $request)
    {
        // اعتبارسنجی داده‌ها
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // تلاش برای ورود
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // اگر ورود موفق بود، به صفحه داشبورد منتقل کن
            return redirect()->intended('/admin/dashboard');
        }

        // اگر اطلاعات اشتباه بود، خطا رو برگردون
        return back()->withErrors(['email' => 'اطلاعات وارد شده صحیح نیست.']);
    }

    // متد لاگ‌اوت
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}



