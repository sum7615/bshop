@extends('layouts.master')
@section('title')
Sale
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
                <h4 class="card-title">Sale</h4>
              </div>
              <a class='btn btn-primary pull-right'href="{{url('/allSale')}}">All Sale</a>
            </div>
              <div class="card-body">

              </div>
            </div>
          </div>
      
      </div>






@endsection
