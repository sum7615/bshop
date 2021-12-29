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
                <h4 class="card-title"> Employee Details</h4>
              </div>
              <div class="card-body">
                <form>
              @csrf
                  @foreach($data as $data)

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
                          <label for="designation" class="col-form-label">Designation</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="designation" readonly class="form-control" value="{{$data['designation']}}" >
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
                          <label for="address" class="col-form-label">Address</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="address" readonly class="form-control" value="{{$data['address']}}" >
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
                          <label for="joining_date" class="col-form-label"> Joining Date </label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="joining_date" readonly class="form-control" value="{{$data['joining_date']}}" >
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
                  @endforeach
                </form>
                <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
                <a href="{{url('/updateEmployee').'/'.$data['id']}}" class='btn btn-danger'>Update</a>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('script')

@endsection

