@extends('layouts.master')
@section('title')
Employee
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
                <h4 class="card-title">Add Employee</h4>
              </div>
              <div class="card-body">
                    <form method='post' action="{{url('/addEmployee')}}">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input name='name' type="text" class="form-control" id="name" placeholder="Name">
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
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                            <textarea name='address' type="text" class="form-control" id="address" placeholder="Full Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="designation" class="col-sm-2 col-form-label">designation</label>
                            <div class="col-sm-10">
                            <input name='designation' type="text" class="form-control" id="designation" placeholder="designation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="joining_date " class="col-sm-2 col-form-label">Joining Date </label>
                            <div class="col-sm-10">
                            <input name='joining_date' type="date" class="form-control" id="joining_date " placeholder="Joining Date ">
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
                        <!-- </div>
                        <div class="form-group row">
                        <label for="aadhar" class="col-sm-2 ">Aadhar Card </label>
                        <div class="col-sm-10">
                            <input name='aadhar' type="file" id="aadhar">Select File</input>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="pan" class="col-sm-2 ">Pan Card </label>
                        <div class="col-sm-10">
                            <input name='pan' type="file" id="pan">Select File</input>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="bank" class="col-sm-2 ">Bank Passbook</label>
                        <div class="col-sm-10">
                            <input name='bank' type="file" id="bank">Select File</input>
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="other" class="col-sm-2 ">Other Document</label>
                        <div class="col-sm-10">
                            <input name='other' type="file" id="other">Select File</input>
                          </div>
                      </div> -->
                     

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

@section('script')

@endsection
