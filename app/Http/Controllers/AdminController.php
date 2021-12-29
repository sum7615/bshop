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
use App\Models\Order;
use App\Models\Cash;
use App\Models\Sale;
use App\Models\Stock;
use App\Models\PayOut;
use App\Models\TerminatedEmployee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function home(){
        return view ('admin.welcome');
    }   
     public function profile(){
        return view ('admin.profile');
    }
    
    public function login(Request $request){      
        if (Request::isMethod('POST'))
        { 
            $data= Request::All();
       
            $dbdata= Admin::where(['username'=>$data['username'],'password'=>sha1($data['password'])])->first();
       
              if ([$data['username']=$dbdata['username']] && [$data['password']=sha1($dbdata['username'])]){

                     $username= $dbdata['username'];
                     $name= $dbdata['name'];
                
             
                     Session::put('adminData', $username);
                     Session::put('name', $name);


                return redirect ('/adminDashboard');
                }
                else{
                    return redirect ('login')->with('msg','Invalid Username/Password');
                    
                }
        }
        return view ('admin.login');
      
    }
    public function logout(){
        if(Session::has('adminData'))
        {
            session()->pull('adminData');
        }
        
        return redirect('login');
    }
    function adminDashboard(){
        $sale = Sale::All();
        $cash = Cash::all();
        $pay = PayOut::all();
        $order = Order::get();
        $stock = Stock::where('quantity','<=','10')->get();
        $working = Employee::where('attendence','present')->count();
        $total =0;
        $totalPayOut =0;

    //   dd($order);
        foreach ($pay as $pays) {
        
            $totalPayOut = $totalPayOut+$pays['amount'];
   
            }

        foreach ($sale as $p) {
        
            $total = $total+$p['amount'];
   
            }
         
        return view ('admin.dashboard',compact('total','sale','working','cash','pay','totalPayOut','stock','order'));
    }
  
    //employee controll
    public  function employee(){
        $data = Employee::get();
        
        return view ('admin.employee.employee', compact('data'));
    }
    public function employeeView(Request $request,$id){
        $data = Employee::where('id',$id)->where('status','active')->get();

        return view ('admin.employee.employeeView', compact('data'));
    }

    public function updateEmployee(Request $request, $id){
        
        
        if (Request::isMethod('POST'))
        {
           
        $data = Request::input();
        $userData = array(
            'name' => $data['name'], 
            'phone' => $data['phone'], 
            'alt_phone' => $data['alt_phone'],
            'address' => $data['address'], 
            'joining_date' => $data['joining_date'],
            'designation' => $data['designation'],
            'status' => $data['status']

        );
        Employee::where('id',$id)->update($userData);

        return redirect ('employee') ->with('success', 'Employee updated successfully');

        }

        $data = Employee::where('id',$id)->first();


        return view ('admin.employee.updateEmployee', compact('data'));
    }
    public function addEmployee(Request $request){

            if (Request::isMethod('post'))
                {
                    // $this->validate($request, [
                    //     'name' => 'required',
                    //     'email' => 'required|email',
                    //     'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                    //     'aadhar' => 'required|mimes:pdf,xlx,csv,jpg,png|max:2048',
                    //     'pan' => 'required|mimes:pdf,xlx,csv,jpg,png|max:2048',
                    //     'bank' => 'required|mimes:pdf,xlx,csv,jpg,png|max:2048',
                    //     'other' => 'required|mimes:pdf,xlx,csv,jpg,png|max:2048',   
                    //  ]);
                   
                    // $aadhar = new File;
                    // if($request->aadhar()) {
                    //     $fileName = time().'_'.$req->file->getClientOriginalName();
                    //     $filePath = $req->file('aadhar')->storeAs('uploads', $fileName, 'public');
                    //     $aadhar->name = time().'_'.$req->file->getClientOriginalName();
                    //     $aadhar->file_path = '/storage/' . $filePath;
                    //     $aadhar->save();
                    // }
                $data = Request::All();
                $userData = array(
                    'name' => $data['name'], 
                    'email' => $data['email'], 
                    'phone' => $data['phone'], 
                    'alt_phone' => $data['alt_phone'],
                    'address' => $data['address'], 
                    'joining_date' => $data['joining_date'],
                    'designation' => $data['designation'],
                    'status' => $data['status']

                );
              
                Employee::create($userData);

                return redirect ('employee');

                }
        return view ('admin.employee.addEmployee');
    }
    public function terminateEmployee(Request $request,$id){
        if (Request::isMethod('post'))
        {
            $pdata = Employee::where('id',$id)->first();
    
            $tdata = Request::All();
           
            $finaldata = array(
                'name' => $pdata['name'], 
                'email' => $pdata['email'], 
                'phone' => $pdata['phone'], 
                'alt_phone' => $pdata['alt_phone'],
                'address' => $pdata['address'], 
                'joining_date' => $pdata['joining_date'],
                'designation' => $pdata['designation'],
                // 'aadhar' => $pdata['aadhar'],
                // 'pan' => $pdata['pan'], 
                // 'bank' => $pdata['bank'], 
                // 'other' => $pdata['other'], 

                // 'termination_letter' => $tdata['termination_letter'], 
                // 'resignation_letter' => $tdata['regignation_letter'], 
                'termination_reason' => $tdata['termination_reason'], 
                'termination_date' => $tdata['termination_date'], 
                    );
                    TerminatedEmployee::create($finaldata);
                    Employee::find($id)->delete();

                return redirect ('employee')->with('msg', 'Employee terminated successfully');

        }
        $data = Employee::where('id',$id)->first();
        return view ('admin.employee.terminateEmployee',compact('data'));
    }

    
}
