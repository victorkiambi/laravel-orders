<?php

namespace App\Http\Controllers;

use App\Models\Levels;
use App\Models\Orders;
use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Tests\Integration\Queue\Order;
use function PHPUnit\Framework\returnArgument;

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
//        return $request;

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

        $services = Services::all();
        $levels = Levels::all();
        if(request()->ajax()) {
            return datatables()->of(Orders::select('*'))
                ->addColumn('action', function($row){
                    return '<a href="javascript:void(0)"  data-toggle="tooltip" data-id="'.$row->id.'" class="edit btn btn-success btn-sm edit-product">Edit</a>
                            <a href="javascript:void(0)" data-id="'.$row->id.'" class="delete-order btn btn-danger btn-sm">Delete</a>';
                })
                ->rawColumns(['action'])
//                ->addColumn('action', 'company-action')
//                ->rawColumns(['action'])
//                ->addIndexColumn()
                ->make(true);
        }
        return view('users.orders',['services'=> $services, 'levels'=> $levels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        $order = Orders::find($id);
        return response()->json($order);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        $validated = $request->validate([
//            'id' => 'required',
//            'type' => 'required',
//            'pages' => 'required',
//            'deadline'=> 'required',
//            'level'=>'required',
//        ]);

//       return $request;

        $order = Orders::where('id',$request->order_id)->first();

//        return response()->json($order);
        $order->order_type = $request['type'];
        $order->order_pages = $request['pages'];
        $order->order_deadline = $request['deadline'];
        $order->order_instructions = $request->instructions ?: "";
        $order->order_level= $request['level'];

        $order->save();

        return back()->with('success','Order updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders, $id)
    {
        Orders::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
