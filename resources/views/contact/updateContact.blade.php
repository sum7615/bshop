@extends('layouts.master')
@section('title')
Update Contact
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
                <h4 class="card-title"> Update Employee </h4>
              </div>
              <div class="card-body">

              <form method='post' enctype="multipart/form-data" action="{{url('/updateContact').'/'.$data['id']}}">
            
                    @csrf
             
                    <div class="row">
                      <div class="col-auto">
                          <label for="company_name" class="col-form-label">Company Name</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" name='company_name' id="company_name" class="form-control" value="{{$data['company_name']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="company_type" class="col-form-label">Company Type</label>
                      </div>
                      <div class="col-auto">
                          <input type="text"name='company_type' id="company_type" class="form-control" value="{{$data['company_type']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="name" class="col-form-label">Name</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" name='name'id="name" class="form-control" value="{{$data['name']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="designation" class="col-form-label">Designation</label>
                      </div>
                      <div class="col-auto">
                          <input type="text"name='company_post' id="designation" class="form-control" value="{{$data['company_post']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="email" class="col-form-label">Email</label>
                      </div>
                      <div class="col-auto">
                          <input type="text"name='email' id="email" class="form-control" value="{{$data['email']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="company_address" class="col-form-label">Company Address</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" name='company_address'id="company_address" class="form-control" value="{{$data['company_address']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="phone" class="col-form-label">Phone</label>
                      </div>
                      <div class="col-auto">
                          <input type="text"name='phone' id="phone" class="form-control" value="{{$data['phone']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="alt_phone" class="col-form-label">Alternative Phone </label>
                      </div>
                      <div class="col-auto">
                          <input type="text"name='alt_phone' id="alt_phone" class="form-control" value="{{$data['alt_phone']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="contract_date" class="col-form-label"> Contract Date </label>
                      </div>
                      <div class="col-auto">
                          <input type="date" name='contract_date'id="contract_date" class="form-control" value="{{$data['contract_date']}}" >
                      </div>
                  </div> 
<!-- 
                  <div class="row">
                        <div class="col-auto">
                            <label for="contract" class="col-form-label ">Contract</label>
                        </div>
                        <div class="col-auto">
                            <input  type="text" name='contract' id="contract"class="form-control"  value="{{$data['contract']}}">
                        </div>
                  </div> -->

                  <div class="row">
                      <div class="col-auto">
                          <label for="status" class="col-form-label">Status</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" readonly name='status'id="status" class="form-control" value="{{$data['status']}}" >                                            
                            <div class="col-sm-10">
                            <select name="status" class="form-control"  id="status">
                            <option value="" autofocus>Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            </select>    
                      </div>
                  </div>

           
                  <button class='btn btn-primary'type="submit">Update</button>
              <a href="{{url('/deleteContact'.'/'.$data['id'])}}" class='btn btn-submit'>Delete Contact</a>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




@endsection
