<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Levels;
use App\Models\Orders;
use App\Models\Services;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $services = Services::all();
        $levels = Levels::all();
        return view('users.dashboard', ['services'=> $services, 'levels'=> $levels]);
    }
}
