@extends('layouts.master')
@section('title')
Completed Order
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


    <div class="container">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="pull-left">
                <h4 class="card-title">Completed Order</h4>
                </div>
              </div>  

              <div class="card-body">
               <table class="table" id='myTable'>
                  <thead class="thead-light">
                                <tr>
                                    <th >Item</th>
                                    <th >Rate</th>
                                    <th >Quantity</th>
                                    <th >Amount</th>
                                    <th >Expected Date</th>                                
                                    <th >Expected Time</th>
                                    <th >Status</th>                                 
                                </tr>
                            </thead>
                            @foreach($data as $data)
                            <tbody>    
                                                           
                                <tr>
                                   <td>{{$data['product']}}</td>
                                   <td>{{$data['rate']}}</td>
                                   <td>{{$data['quantity']}}</td>
                                   <td>{{$data['amount']}}</td>
                                   <td>{{$data['delivery_date']}}</td>
                                   <td>{{$data['delivery_time']}}</td>
                                   <td>{{$data['status']}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                </table>
                     <a href="{{ url()->previous() }}" class="btn btn-default pull-right">Back</a>

              </div>
            </div>
          </div>
        </div>

      </div>






@endsection
