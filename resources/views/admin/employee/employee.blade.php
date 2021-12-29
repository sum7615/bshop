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

@if(Session::has('msg'))
    <?php $msg= session('msg');?>
      <p class='text-primary'>{{$msg}}</p>
@endif

<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Employees</h4>
              </div>
              <a href="{{url('/addEmployee')}}" class='btn btn-submit'>Add Employee</a>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id='myTable'>
                    <thead class=" text-primary text-center">
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Alternative Phone</th>
                      <th>Addtess</th>
                      <th>Designation</th>
                      <th>Action</th>

                    </thead>
                    <tbody>
                    @foreach($data as $data)
                      <tr class=" text-center">
                     
                          
                          <td>{{$data['name']}}</td>
                          <td>{{$data['phone']}}</td>
                          <td>{{$data['alt_phone']}}</td>
                          <td>{{$data['address']}}</td>
                          <td>{{$data['designation']}}</td>
                          <td>
                              <a href="{{url('/employeeView').'/'.$data['id']}}"><i class="fas fa-info"></i></a> 

                              <a href="{{url('/updateEmployee').'/'.$data['id']}}"><i class="far fa-edit"> </i> </a>

                          </td>
                
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>






@endsection
