@extends('layouts.master')
@section('title')
Contact
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
                <h4 class="card-title">Contact</h4>
              </div>
              <a href="{{url('/addContact')}}" class='btn btn-submit'>Add Contact</a>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id='myTable'>
                    <thead class=" text-primary text-center">
                      <th>Company Name</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Company Address</th>
                      <th>Phone</th>
                      <th>Alternative Phone</th>
                      <th>Email</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($data as $data)
                      <tr class=" text-center">                       
                          <td>{{$data['company_name']}}</td>
                          <td>{{$data['name']}}</td>
                          <td>{{$data['company_post']}}</td>
                          <td>{{$data['company_address']}}</td>
                          <td>{{$data['phone']}}</td>
                          <td>{{$data['alt_phone']}}</td>
                          <td>{{$data['email']}}</td>
                          <td>
                              <a href="{{url('/contactDetails').'/'.$data['id']}}"><i class="fas fa-info"></i></a> 

                              <a href="{{url('/updateContact').'/'.$data['id']}}"><i class="far fa-edit"> </i> </a>

                          </td>
                
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
              <a href="{{url('/deletedContact')}}" class='btn btn-submit'>Deleted Contact</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>






@endsection
