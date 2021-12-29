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

              <form method='post' enctype="multipart/form-data" action="{{url('/terminateEmployee').'/'.$data['id']}}">
            
                    @csrf
                  <div class="row form-group">
                 
                          <label for="name" class="col-sm-2 col-form-label">Name</label>
                 
                      <div class="col-auto">
                          <input enctype="multipart/form-data" readonly type="text" id="name"  class="form-control" value="{{$data['name']}}" >
                      </div>
                  </div>
                  <div class="row form-group">
                 
                          <label for="designation" class="col-sm-2 col-form-label">Designation</label>
               
                      <div class="col-sm-10">
                          <input type="text" id="designation" readonly enctype="multipart/form-data"  class="form-control" value="{{$data['designation']}}" >
                      </div>
                  </div> 
                  <div class="row form-group">
                     
                          <label for="email" class="col-sm-2 col-form-label">Email</label>
            
                      <div class="col-auto">
                          <input type="text" id="email" readonly enctype="multipart/form-data" class="form-control" value="{{$data['email']}}" >
                      </div>
                  </div> 
                  <div class="row form-group">
                     
                          <label for="address" class="col-sm-2 col-form-label">Address</label>
                      
                      <div class="col-sm-10">
                          <input type="text" readonly enctype="multipart/form-data" id="address"  class="form-control" value="{{$data['address']}}" >
                      </div>
                  </div> 
                  <div class="row form-group">
                    
                          <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                 
                      <div class="col-sm-10">
                          <input type="text" readonly enctype="multipart/form-data" id="phone"  class="form-control" value="{{$data['phone']}}" >
                      </div>
                  </div> 
                  <div class="row form-group">
                    
                          <label for="alt_phone" class="col-sm-2 col-form-label">Alternative Phone </label>
               
                      <div class="col-sm-10">
                          <input type="text" readonly enctype="multipart/form-data" id="alt_phone"  class="form-control" value="{{$data['alt_phone']}}" >
                      </div>
                  </div> 
                  <div class="row form-group">
                      
                          <label for="joining_date" class="col-sm-2 col-form-label"> Joining Date </label>
               
                      <div class="col-sm-10">
                          <input type="date" readonly enctype="multipart/form-data" id="joining_date"  class="form-control" value="{{$data['joining_date']}}" >
                      </div>
                  </div> 
                  <div class="row form-group">
                     
                          <label for="termination_date" class="col-sm-2 col-form-label"> Termination Date </label>
                     
                      <div class="col-sm-10">
                          <input type="date" enctype="multipart/form-data" id="termination_date" name='termination_date' class="form-control" value="{{$data['joining_date']}}" >
                      </div>
                  </div> 
                  <div class="row form-group">
                     
                          <label for="termination_reason" class="col-sm-2 col-form-label"> Termination Reason </label>
                   
                      <div class="col-sm-10">
                          <textarea id="termination_reason" name='termination_reason' placeholder="Termination Reason" class="form-control" cols="30" rows="10"></textarea>
                      </div>
                  </div> 
                  <!-- <div class="form-group row">
                        <label for="regignation_letter" class="col-sm-2 ">Resignation Letter</label>
                        <div class="col-sm-10">
                            <input name='regignation_letter' type="file" id="pan">Select File</input>
                          </div>
                      </div>
                  <div class="row form-group">
                        <label for="termination_letter" class="col-sm-2 ">Termination Letter</label>
                        <div class="col-sm-10">
                            <input name='termination_letter' type="file" id="pan">Select File</input>
                          </div>
                   </div> -->

                     
                  
                  <button class='btn btn-primary'type="submit">Terminate</button>
             
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('script')

@endsection

