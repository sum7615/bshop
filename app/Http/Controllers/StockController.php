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
use App\Models\Stock;
use App\Models\TerminatedEmployee;
use App\Models\Contact;
use App\Models\StockIn;
use App\Models\DeletedContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StockController extends Controller
{

    public function stock(){
    $data = Stock::All();
        return view ('admin.stock.stock', compact('data'));
    }
    public function addStock(Request $request){

        return view ('admin.stock.addStock');
    }
    public function updateStock(Request $request,$id){

        return view ('admin.stock.updateStock');
    }
    public function deleteStock(Request $request,$id){

        return view ('admin.stock.stock');
    }
    


    //Contact
    public function contact(Request $request){
        $data = Contact::get();
        return view ('contact.contact', compact('data'));
    }
    public function addContact(Request $request){
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
            'company_address' => $data['company_address'], 
            'contract_date' => $data['contract_date'],
            'company_post' => $data['company_post'],
            'contract' => $data['contract'],
            'company_type' => $data['company_type'],
            'company_name' => $data['company_name'],
            'status' => $data['status']
        );
        Contact::create($userData);
        return redirect ('contact');
        }
        $data = Contact::get();
        return view ('contact.addContact', compact('data'));
    }
    public function updateContact(Request $request,$id){

        if (Request::isMethod('POST'))
        {
           
        $data = Request::input();
  

        $userData = array(
            'name' => $data['name'], 
            'email' => $data['email'], 
            'phone' => $data['phone'], 
            'alt_phone' => $data['alt_phone'],
            'company_address' => $data['company_address'], 
            'contract_date' => $data['contract_date'],
            'company_post' => $data['company_post'],
            // 'contract' => $data['contract'],
            'company_type' => $data['company_type'],
            'company_name' => $data['company_name'],
            'status' => $data['status']
        );

        
       

        Contact::where('id',$id)->update($userData);

        return redirect ('contact') ->with('success', 'Employee updated successfully');

        }



        $data = Contact::where('id',$id)->first();
        return view ('contact.updateContact', compact('data'));
    }

    public function contactDetails(Request $request){
        $data = Contact::get();
        return view ('contact.contactDetails', compact('data'));
    }
    public function deleteContact(Request $request, $id){
       $pdata = Contact::where('id',$id)->first();
       $userData = array(
        'name' => $pdata['name'], 
        'email' => $pdata['email'], 
        'phone' => $pdata['phone'], 
        'alt_phone' => $pdata['alt_phone'],
        'company_address' => $pdata['company_address'], 
        'contract_date' => $pdata['contract_date'],
        'company_post' => $pdata['company_post'],
        // 'contract' => $pdata['contract'],
        'company_type' => $pdata['company_type'],
        'company_name' => $pdata['company_name'],
        'status' => $pdata['status']
    );
       DeletedContact::create($userData);
       Contact::find($id)->delete();
       $data = Contact::all();
        return view ('contact.contact', compact('data'));
    }
    public function deletedContact(Request $request){
        $data = DeletedContact::all();
        return view ('contact.deletedContact', compact('data'));
    }
    public function deletedContactDetails(Request $request,$id){
        $data = DeletedContact::where('id',$id)->get();
        return view ('contact.deletedContactDetails', compact('data'));
    }
    





    //stockIn
    public function stockIn(){
     ;
        return view ('admin.stock.stockIn');
    }
    
    
}
