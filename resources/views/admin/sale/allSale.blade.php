@extends('layouts.master')
@section('title')
All Sale
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
                <h4 class="card-title">Sale</h4>
              </div>
              <div class="card-body">
              <table class="table" id='myTable'>

                    <thead class="thead-light">

                    <tr>
                        <th>Item</th>
                        <th>Rate</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Date & Time</th>

                        
                    </tr>
                    </thead>
                    <tbody>
                   @foreach($data as $data)

                    <tr>
                        
                    <td>{{$data['product']}}</td>
                    <td>{{$data['rate']}}</td>
                    <td>{{$data['quantity']}}</td>
                    <td>{{$data['amount']}}</td>
                    <td>{{$data['created_at']}}</td>
                    
                    
                    </tr>
                    @endforeach
                  

                    </tbody>

                    </table> 
              
              </div>
            </div>
          </div>
        </div>
      </div>






@endsection
