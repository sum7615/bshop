<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\User;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


// models
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Order;
use App\Models\CompletedOrder;
use App\Models\Document;
use App\Models\TerminatedEmployee;
use App\Models\Sale;


class SaleController extends Controller
{
    //
    public function sale(){

   
        return view ('admin.sale.sale');
    }
    public function getOrder(Request $request){
        
        $data= Order::where('status','pending')->get();
    

        if (Request::isMethod('POST'))
        { 
            $data= Request::All();
            $status= $data['status'];
            if($status=='pending'){
                Order::create($data)->with('msg','Order Placed Succesfully');
            }
                CompletedOrder::create($data)->with('msg','Order Placed Succesfully'); 
            return redirect ('/getOrder');
            }
        return view ('admin.sale.getOrder',compact('data',));
    }
    public function completedOrder(){
        $data = CompletedOrder::all();
   
        return view ('admin.sale.completedOrder',compact('data'));
    }
    public function orderStatus(Request $request){
    $data = Request::all();
    if (Request::isMethod('post'))
    {
    if($data['status']=='delivered'){
       

    $updatedData = array(
        'product'=>$data['product'],
        'quantity'=>$data['quantity'],
        'rate'=>$data['rate'],
        'amount'=>$data['rate']*$data['quantity'],
        'delivery_date'=>$data['delivery_date'],
        'delivery_time'=>$data['delivery_time'],
        'status'=>$data['status']

    );
    CompletedOrder::create($updatedData);
    Order::where('id',$data['id'])->delete();
    return redirect('/getOrder');
    }
    }
   
    return redirect('/getOrder');

       
    }
    
    
    public function allSale(){
        $data = Sale::all();
   
        return view ('admin.sale.allSale',compact('data'));
    }
  
    
    
}
