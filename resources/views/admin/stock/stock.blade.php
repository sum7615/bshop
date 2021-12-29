@extends('layouts.master')
@section('title')
Stock
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
                  <h4 class="card-title">Stocks</h4>
                </div> 
                <a href="{{url('/addStock')}}" class='btn btn-submit pull-right'>Add Stock</a>
                             
             
              </div>  

              <div class="card-body">
               <table class="table" id='myTable'>
                  <thead class="thead-light">
                                <tr>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Quantity</th>
                                <th>MRP</th>
                                <th>Input Date</th>
                                <th>Action</th>                                  
                                </tr>
                            </thead>
                            @foreach($data as $data)
                            <tbody>    
                                                           
                                <tr>
                                <td>{{$data['name']}}</td>
                                <td>{{$data['brand']}}</td>
                                <td>{{$data['quantity']}}</td>
                                <td>{{$data['mrp']}}</td>
                                <td>{{$data['stock_in']}}</td>
                                <td>
                                    <a href="{{url('/updateStock').'/'.$data['id']}}"><i class="fas fa-info"></i></a> 

                                    <a href="{{url('/updateEmployee').'/'.$data['id']}}"><i class="far fa-edit"> </i> </a>

                                </td>
                
                               
                                       
                                                                                                  
                                    
                                   
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
