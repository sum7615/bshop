<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests;
use Request;
use App\User;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Demo;
use App\Models\Stock;
use App\Models\TerminatedEmployee;
use App\Models\Contact;
use App\Models\Cash;
use App\Models\DeletedContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MoneyController extends Controller
{
    //
    public function cash(){
        $data =Cash::first(); 
       return view ('admin.cash.cash', compact('data'));
    }
    public function cashDispatch(Request $request, $id){
        if(Request::isMethod('POST')){
            $pdata = Request::All();
        
            $updatedata = array(
                'one'=> $pdata['1'],
                'two'=> $pdata['2'],
                'five'=> $pdata['5'],
                'ten'=> $pdata['10'],
                'twenty'=> $pdata['20'],
                'fifty'=> $pdata['50'],
                'hundred'=> $pdata['100'],
                '2_hundred'=> $pdata['200'],
                '5_hundred'=> $pdata['500'],
                '2_thousand'=> $pdata['2000']
            );
      
          
            Cash::where('id',$id)->update($updatedata);
            return redirect ("/cash");
        }



        $data =Cash::first(); 
       return view ('admin.cash.cashDispatch', compact('data'));
    }

    public function payOut(){
       return view ('admin.cash.payOut');

    }
    

}
