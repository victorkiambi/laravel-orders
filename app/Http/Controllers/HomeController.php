<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role =  Auth::user()->role;
        if ($role == "admin"){
            return view('admin.dashboard');
        }
        else{
            $services = Services::all();
            $levels = Levels::all();
            return view('users.dashboard', ['services'=> $services, 'levels'=> $levels]);
        }

    }
}
