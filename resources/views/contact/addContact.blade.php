@extends('layouts.master')
@section('title')
Add Contact
@endsection

@section('content')
@if(!Session::has('adminData'))
<script type='text/javascript'>
window.location.href="{{url('/login')}}"
</script>
@endif

@if(Session::has('msg'))
    <?php $msg= session('msg');?>
      <p class='text-primary'>{{$msg}}</p>
@endif

<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Contact</h4>
              </div>
              <div class="card-body">
                    <form method='post' action="{{url('/addContact')}}">
                    @csrf
                        <div class="form-group row">
                            <label for="company_name" class="col-sm-2 col-form-label">Company Name</label>
                            <div class="col-sm-10">
                            <input name='company_name' type="text" class="form-control" id="company_name" placeholder="Company Name"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company_type " class="col-sm-2 col-form-label">Company Type </label>
                            <div class="col-sm-10">
                            <input name='company_type' type="text" class="form-control" id="company_type " placeholder="Company Type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Company Address</label>
                            <div class="col-sm-10">
                            <textarea name='company_address' type="text" class="form-control" id="address" placeholder="Company Address"></textarea>
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input name='name' type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                            <div class="col-sm-10">
                            <input name='company_post' type="text" class="form-control" id="designation" placeholder="Designation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input name='email' type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                            <input name='phone'type="text" class="form-control" id="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alt_phone" class="col-sm-2 col-form-label">Alternative Phone</label>
                            <div class="col-sm-10">
                            <input name='alt_phone'type="text" class="form-control" id="alt_phone" placeholder="Alternative Phone">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="contract_date " class="col-sm-2 col-form-label">Contract Date </label>
                            <div class="col-sm-10">
                            <input name='contract_date' type="date" class="form-control" id="contract_date " placeholder="Contract Date ">
                            </div>
                        </div>
                           
                            <div class="form-group row">
                            <label for="contract" class="col-sm-2 ">Contract</label>
                            <div class="col-sm-10">
                            <input name='contract' type="file" id="contract">
                            </div>
                            </div>
                            
               
                        <div class="form-group row">
                            <label for="status " class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                            <select name="status" class="form-control"  id="status">
                            <option value="" autofocus>Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            </select>
                            </div>
                        </div>
                         
                     

                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>

                            </div>
                        </div>

                        
                    </form>
                    @if(Session::has('msg'))
                    <?php $msg= session('msg');?>
                    <p class='text-danger'>{{$msg}}</p>
                    @endif

              </div>
            
             
            </div>
          </div>
        </div>
      </div>







@endsection
