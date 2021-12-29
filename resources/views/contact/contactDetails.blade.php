@extends('layouts.master')
@section('title')
Contact Details
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
                <h4 class="card-title"> Contact Details</h4>
              </div>
              <div class="card-body">
                <form>
              @csrf
                  @foreach($data as $data)
          
                  <div class="row">
                      <div class="col-auto">
                          <label for="company_name" class="col-form-label">Company Name</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="company_name" readonly class="form-control" value="{{$data['company_name']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="company_type" class="col-form-label">Company Type</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="company_type" readonly class="form-control" value="{{$data['company_type']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="name" class="col-form-label">Name</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="name" readonly class="form-control" value="{{$data['name']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="company_post" class="col-form-label">Designation</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="company_post" readonly class="form-control" value="{{$data['company_post']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="email" class="col-form-label">Email</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="email" readonly class="form-control" value="{{$data['email']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="company_address" class="col-form-label">Company Address</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="company_address" readonly class="form-control" value="{{$data['company_address']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="phone" class="col-form-label">Phone</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="phone" readonly class="form-control" value="{{$data['phone']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="alt_phone" class="col-form-label">Alternative Phone </label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="alt_phone" readonly class="form-control" value="{{$data['alt_phone']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="joining_date" class="col-form-label"> Contract Date </label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="joining_date" readonly class="form-control" value="{{$data['contract_date']}}" >
                      </div>
                  </div> 
                  
                  <div class="row">
                      <div class="col-auto">
                          <label for="status" class="col-form-label">Status</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="status" readonly class="form-control" value="{{$data['status']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="contract" class="col-form-label">Contract</label>
                      </div>
                      <div class="col-auto">
                          <input type="file" id="contract" readonly class="form-control" value="{{$data['contract']}}" >
                      </div>
                  </div>
                  @endforeach
                </form>
                <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
                <a href="{{url('/updateContact').'/'.$data['id']}}" class='btn btn-danger'>Update</a>
                <a href="{{url('/deleteContact').'/'.$data['id']}}" class='btn btn-danger'>Delete</a>
              </div>
            </div>
          </div>
        </div>
      </div>



@endsection
