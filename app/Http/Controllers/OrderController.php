<?php

namespace App\Http\Controllers;

use App\Order;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Staffs;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=Auth ::user()->id;
        // dd($id);
        
        $orders=Order ::where('userid',$id)->get();
        // dd($orders);/
        $staffs=DB::table('staffs')->get();
        // dd($staff);
        // $staff=Staff::all()->dd();
        return view('orders.index',compact('orders','staffs'));
    }
}
