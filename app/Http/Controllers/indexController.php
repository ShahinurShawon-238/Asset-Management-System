<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        
        return view('admin.index');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You are logged out successfully');
    }
}
