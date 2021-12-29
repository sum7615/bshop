@extends('layouts.master')
@section('title')
Cash Dispatch
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
                <h4 class="card-title">Cash Dispatch </h4>
              </div>
              <div class="card-body">

              <form method='post'  action="{{url('/cashDispatch').'/'.$data['id']}}">
            
                    @csrf
                  <div class="row ">
                      <div class="col-auto">
                          <label for="1" class="col-form-label">1/=</label>
                      </div>
                      <div class="col-auto">
                          <input enctype="type="text" id="1" name='1' class="form-control" value="{{$data['one']}}" >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="2" class="col-form-label">2/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="2" name='2' class="form-control" value="{{$data['two']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="5" class="col-form-label">5/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="5" name='5' class="form-control" value="{{$data['five']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="10" class="col-form-label">10/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="10" name='10' class="form-control" value="{{$data['ten']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="20" class="col-form-label">20/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="20" name='20' class="form-control" value="{{$data['twenty']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="50" class="col-form-label">50/= </label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="50" name='50' class="form-control" value="{{$data['fifty']}}" >
                      </div>
                  </div> 
                  <div class="row">
                      <div class="col-auto">
                          <label for="100" class="col-form-label">100/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="100" name='100' class="form-control" value="{{$data['hundred']}}" >
                      </div>
                  </div> 
                  
                  <div class="row">
                      <div class="col-auto">
                          <label for="200" class="col-form-label">200/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="200" name='200' class="form-control" value="{{$data['2_hundred']}}"  >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="500" class="col-form-label">500/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="500" name='500' class="form-control" value="{{$data['5_hundred']}}"  >
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-auto">
                          <label for="2000" class="col-form-label">2000/=</label>
                      </div>
                      <div class="col-auto">
                          <input type="text" id="2000" name='2000' class="form-control" value="{{$data['2_thousand']}}"  >
                      </div>
                  </div>
                  <button class='btn btn-primary'type="submit">Cash Out</button>
       
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('script')

@endsection

