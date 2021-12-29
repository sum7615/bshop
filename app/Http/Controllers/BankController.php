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
use App\Models\Document;
use App\Models\Bank;
use App\Models\TerminatedEmployee;
use App\Models\Sale;
class BankController extends Controller
{
    //
    public function bank(){
    
        return view('admin.bank.bank');
    }
}
