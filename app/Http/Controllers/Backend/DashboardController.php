<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $doctors = User::where('role','doctor');
        return view('backend.layouts.dashboard',compact('doctors'));
    }

    public function login()
    {
        return view('backend.admin.admin_login');
    }

    public function doLogin(Request $request)
    {
        Auth::attempt([
           'email'=>$request->email,
           'password'=>$request->password,
        ]);

        return redirect()->route('dashboard');
    }

    public function adminlogout()
    {
        Auth::logout();

        return redirect()->route('admin.logout');
    }
}
