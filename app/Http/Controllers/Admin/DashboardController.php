<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        return view('admin.dashboard');
    }

    public function show(Orders $orders)
    {
        if(request()->ajax()) {
            return datatables()->of(Orders::select('*'))
//                ->addColumn('action', 'company-action')
//                ->rawColumns(['action'])
//                ->addIndexColumn()
                ->make(true);
        }
        return view('admin.dashboard');
    }
}
