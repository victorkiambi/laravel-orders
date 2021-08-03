<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'type' => 'required',
            'pages' => 'required',
            'deadline'=> 'required',
            'level'=>'required',

        ]);


            $fileName = $request->file()? time().'_'.$request->file->getClientOriginalName(): "";
            $filePath = $request->file()? $request->file('file')->storeAs('uploads', $fileName, 'public') : "";

        $user_id =  Auth::user()->id;
        $order = new Orders();
        $order->user_id = $user_id;
        $order->user_email = Auth::user()->email;
        $order->order_type = $validated['type'];
        $order->order_pages = $validated['pages'];
        $order->order_deadline = $validated['deadline'];
        $order->order_instructions = $request->instructions ?: "";
        $order->order_level= $validated['level'];
        $order->order_status = "submitted";
        $order->file_name = $fileName;
        $order->file_path = $filePath;
        $order->save();
        return back()->with('success','Order created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
