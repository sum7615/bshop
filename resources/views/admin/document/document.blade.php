@extends('layouts.master')
@section('title')
Documents
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
                <h4 class="card-title"> Documents</h4>
              </div>
     

              <div class="card-body">
              <form action="{{url('/document')}}"  enctype="multipart/form-data" method="post">
                  @csrf
                <input type="file" name="doc" id="">
                <button type="submit">Submit</button>
                </form>  
                @foreach($data as $data)
                
                <ul>
                    <li>
                    <img src="{{asset('storage/files/'.$data['name'])}}" class="img-responsive" style="width:100%;">
        

                    </li>
                </ul>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>






@endsection
