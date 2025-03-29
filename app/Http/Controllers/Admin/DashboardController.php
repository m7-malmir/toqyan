<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * نمایش داشبورد ادمین
     */
    public function index(): Response
    {
        return Inertia::render('Admin/Dashboard');
    }
}
