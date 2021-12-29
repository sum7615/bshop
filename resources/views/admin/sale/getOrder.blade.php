@extends('layouts.master')
@section('title')
Pending Order
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
                  <h4 class="card-title">Pending Order</h4>
                </div>  
                <a href="{{url('/order/completedOrder')}}" class='btn btn-Danger pull-right' >Completed Order</a>                
                <button type="button" class='btn btn-Danger pull-right' data-bs-toggle="modal" data-bs-target="#order" >Get Order</button>                
             
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
                                    <th >Action</th>                                   
                                </tr>
                            </thead>
                            <tbody> 
                                
                            @foreach($data as $data)
                                                           
                                <tr>
                                  <input type="hidden" id = 'id' value="{{$data['id']}}">
                                   <td>{{$data['product']}}</td>
                                   <td>{{$data['rate']}}</td>
                                   <td>{{$data['quantity']}}</td>
                                   <td>{{$data['amount']}}</td>
                                   <td>{{$data['delivery_date']}}</td>
                                   <td>{{$data['delivery_time']}}</td>
                                   <td>{{$data['status']}}</td>
                                   <td>   
                                       
                                  <button type="button" class='btn btn-Danger pull-right' data-bs-toggle="modal" data-bs-target="#orderStatus"  id='mbt'  ><i class="far fa-edit"> </i> </button>                
                                                                                                  
                                    
                                   </td>
                                </tr>
                                @endforeach

                                
                            </tbody>
                </table>
                <a href="{{ url()->previous() }}" class="btn btn-default pull-right">Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>

     

    
<div class="modal fade" id="orderStatus">
  <div class="modal-dialog text-centre">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title mx-auto" style="width: 150px;">Change Order Status</h5>
      </div>
      <div class="modal-body">                             
        <div class="row mb-3">
          <label for="item" class="col-sm-2 col-form-label">Item</label>
          <div class="col-sm-10">
            <input type="text" id='product' name="product" value="{{$data['product']}}" readonly class="form-control" id="item">
          </div>
        </div>
        <div class="row mb-3">
          <label for="rate" class="col-sm-2 col-form-label">Rate</label>
          <div class="col-sm-10">
            <input type="text" id='rate' name="rate" value="{{$data['rate']}}" readonly class="form-control" id="rate">
          </div>
        </div>
        <div class="row mb-3">
          <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
          <div class="col-sm-10">
            <input type="text" id='quantity' name="quantity" value="{{$data['quantity']}}" readonly class="form-control" id="quantity">
          </div>
        </div>
        <div class="row mb-3">
          <label for="ex_date" class="col-sm-2 col-form-label">Expected Date</label>
          <div class="col-sm-10">
            <input type="text" id='delivery_date' name="delivery_date" value="{{$data['delivery_date']}}" readonly class="form-control" id="ex_date">
          </div>
        </div>
        <div class="row mb-3">
          <label for="ex_time" class="col-sm-2 col-form-label">Expected Time</label>
          <div class="col-sm-10">
            <input type="text" id='delivery_time' name="delivery_time" value="{{$data['delivery_time']}}" readonly class="form-control" id="ex_time">
          </div>
        </div>
       
        <div class="row mb-3">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
        <select name="status"  id='status' class="form-select" aria-label="Default select example" id="status">
          <option value="pending">Pending</option>
          <option value="delivered">Delivered</option>
        </select>
        </div>
        </div>
        <button class='btn btn-primary'type="submit">Submit</button>
        <button type="button" class="btn btn-secondary pull-right" data-bs-dismiss="modal">Close</button>

      </div>


    </div>
  </div>
</div>
<div class="modal fade" id="order">
  <div class="modal-dialog text-centre">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title mx-auto" style="width: 150px;">Get Order</h5>
      </div>
      <div class="modal-body">
  
        <div class="row mb-3">
          <label for="item" class="col-sm-2 col-form-label">Item</label>
          <div class="col-sm-10">
            <input type="text" name="product" class="form-control ipr" id="item">
          </div>
        </div>
        <div class="row mb-3">
          <label for="rate" class="col-sm-2 col-form-label">Rate</label>
          <div class="col-sm-10">
            <input type="text" name="rate" class="form-control ir" id="rate">
          </div>
        </div>
        <div class="row mb-3">
          <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
          <div class="col-sm-10">
            <input type="text" name="quantity" class="form-control iqu" id="quantity">
          </div>
        </div>
        <div class="row mb-3">
          <label for="ex_date" class="col-sm-2 col-form-label">Expected Date</label>
          <div class="col-sm-10">
            <input type="text" name="delivery_date" class="form-control ied" id="ex_date">
          </div>
        </div>
        <div class="row mb-3">
          <label for="ex_time" class="col-sm-2 col-form-label iet">Expected Time</label>
          <div class="col-sm-10">
            <input type="text" name="delivery_time" class="form-control" id="ex_time">
          </div>
        </div>
       
        <div class="row mb-3">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
        <select name="status" class="form-select ist" aria-label="Default select example" id="status">
          <option value="pending">Pending</option>
          <option value="delivered">Delivered</option>
        </select>
        </div>
        </div>
        <button class='btn btn-primary gtor'type="submit">Submit</button>
        <button type="button" class="btn btn-secondary pull-right" data-bs-dismiss="modal">Close</button>

   
      </div>
     
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  $(document).ready(function (){
    $(".gtor").on("click", function(e) {
     e.preventDefault();
     let data ={
      'product': $('.ipr').val(),
      'rate': $('.ir').val(),
      'quantity': $('.iqu').val(),
      'expected_date': $('.ied').val(),
      'expected_time': $('.iet').val(),
      'status': $('.ist').val()     
    }
 
    $.ajax({
      type:'POST',
      url: '/getOrder',
      data:data,
      dataType: 'json',
      success: function(response){
        console.log(response);
      }
    });
    

    });

  })

</script>
@stop

