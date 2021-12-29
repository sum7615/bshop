@extends('layouts.master')
@section('title')
Stock In
@endsection

@section('content')


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
                <h4 class="card-title">Stock In</h4>
              </div>
     

              <div class="card-body">
              
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
