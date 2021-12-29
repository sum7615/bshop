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
use App\Models\Document;
use App\Models\Report;
use App\Models\Bill;
use App\Models\TerminatedEmployee;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class DocumentController extends Controller
{
    //
    public function document(Request $request){
       
        if(Request::isMethod('POST')){
            $data = Request::All();
            
            $name = $data['doc']->getClientOriginalName();
            
            $data['doc']->storeAs('public/files/',$name);
            $document = new Document();
            $document['name']=$name;

            $document->save();
            return redirect()->back();
           


        }

        $data = Document::all();

        return view ('admin.document.document',compact('data'));

    }







    //bill
    public function bill(){
      
        return view('admin.bill.bill');
    }






    //report
    public function report(){
     
        return view('admin.report.report');
    }
}
