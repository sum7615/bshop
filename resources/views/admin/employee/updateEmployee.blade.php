@extends('layouts.master')
@section('title')
Dashboard
@endsection

@section('content')
@if(!Session::has('adminData'))
<script type='text/javascript'>
window.location.href="{{url('/login')}}"
</script>
@endif

<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Update Employee </h4>
              </div>
              <div class="card-body">

              <form method='post' enctype="multipart/form-data" action="{{url('/updateEmployee').'/'.$data['id']}}">
            
                    @csrf
                  <div class="row ">
                      <div class="col-auto">
                          <label for="name" class="col-form-label">Name</label>
                      </div>
                      <div class="col-auto">
                          <input enctype="multipart/form-data" type="text" id="name" name='name' class="form-control" value="{{$data['name']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="designation" class="col-form-label">Designation</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="designation" enctype="multipart/form-data" name='designation' class="form-control" value="{{$data['designation']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="email" class="col-form-label">Email</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="email" enctype="multipart/form-data" class="form-control" value="{{$data['email']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="address" class="col-form-label">Address</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" enctype="multipart/form-data" id="address" name='address' class="form-control" value="{{$data['address']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="phone" class="col-form-label">Phone</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" enctype="multipart/form-data" id="phone" name='phone' class="form-control" value="{{$data['phone']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="alt_phone" class="col-form-label">Alternative Phone </label>
                      </div>
                      <div class="col-auto">
                          <input type="text" enctype="multipart/form-data" id="alt_phone" name='alt_phone' class="form-control" value="{{$data['alt_phone']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="joining_date" class="col-form-label"> Joining Date </label>
                      </div>
                      <div class="col-auto">
                          <input type="date" enctype="multipart/form-data" id="joining_date" name='joining_date' class="form-control" value="{{$data['joining_date']}}" >
                      </div>
                  </div> 
                  
                  <div class="row">
                      <div class="col-auto">
                          <label for="status" class="col-form-label">Status</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" enctype="multipart/form-data" id="status" class="form-control" value="{{$data['status']}}" readonly >
                          <select name="status" class="form-control"  id="status">
                            <option value="" autofocus>Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            </select>
                      </div>
                  </div>
                  
                  <button class='btn btn-primary'type="submit">Update</button>
              <a href="{{url('/terminateEmployee'.'/'.$data['id'])}}" class='btn btn-submit'>Terminate Employee</a>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('script')

@endsection

