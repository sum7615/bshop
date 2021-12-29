@extends('layouts.master')
@section('title')
Cash Monitor
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
<div class="modal fade" id="cashDispatch">
  <div class="modal-dialog text-centre">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cash Dispatch</h5>
      </div>
      <div class="modal-body">
      <div class="container">
      <form method='post'  action="{{url('/cashDispatch').'/'.$data['id']}}" >
            
            @csrf

          <div class="row align-items-center">
              <div class="col-auto">
                  <label for="1" class="col-form-label">1 rupee</label>
              </div>
              <div class="col-auto">
                  <input enctype="type="text" id="1" name='1' class="form-control" value="{{$data['one']}}" >
              </div>
          </div>
          <div class="row">
              <div class="col-auto">
                  <label for="2" class="col-form-label">2 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="2" name='2' class="form-control" value="{{$data['two']}}" >
              </div>
          </div> 
          <div class="row">
              <div class="col-auto">
                  <label for="5" class="col-form-label">5 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="5" name='5' class="form-control" value="{{$data['five']}}" >
              </div>
          </div> 
          <div class="row">
              <div class="col-auto">
                  <label for="10" class="col-form-label">10 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="10" name='10' class="form-control" value="{{$data['ten']}}" >
              </div>
          </div> 
          <div class="row">
              <div class="col-auto">
                  <label for="20" class="col-form-label">20 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="20" name='20' class="form-control" value="{{$data['twenty']}}" >
              </div>
          </div> 
          <div class="row">
              <div class="col-auto">
                  <label for="50" class="col-form-label">50 rupee </label>
              </div>
              <div class="col-auto">
                  <input type="text" id="50" name='50' class="form-control" value="{{$data['fifty']}}" >
              </div>
          </div> 
          <div class="row">
              <div class="col-auto">
                  <label for="100" class="col-form-label">100 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="100" name='100' class="form-control" value="{{$data['hundred']}}" >
              </div>
          </div> 
          
          <div class="row">
              <div class="col-auto">
                  <label for="200" class="col-form-label">200 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="200" name='200' class="form-control" value="{{$data['2_hundred']}}"  >
              </div>
          </div>
          <div class="row">
              <div class="col-auto">
                  <label for="500" class="col-form-label">500 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="500" name='500' class="form-control" value="{{$data['5_hundred']}}"  >
              </div>
          </div>
          <div class="row">
              <div class="col-auto">
                  <label for="2000" class="col-form-label">2000 rupee</label>
              </div>
              <div class="col-auto">
                  <input type="text" id="2000" name='2000' class="form-control" value="{{$data['2_thousand']}}"  >
              </div>
          </div>
          <div class="modal-footer">         
          <button class='btn btn-primary'type="submit">Cash Out</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
      </div>
     
    </div>
  </div>
</div>
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
       <h4 class="card-title"> Cash Monitor</h4>
      </div>

      <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-center">
                      <th>Type</th>
                      <th>Quantity</th>
                      <th>Amount</th>                     
                    </thead>
                    <tbody>                     
                        
                     <tr class=" text-center"><td>1 rupee</td> 
                      <td>{{$data['one']}}</td>
                      <td>{{$data['one']*1}}</td>
                    </tr>
                    <tr class=" text-center"><td>2 rupee</td>
                      <td>{{$data['two']}}</td>
                      <td>{{$data['two']*2}}</td>
                    </tr>
                    <tr class=" text-center"><td>5 rupee</td>
                      <td>{{$data['five']}}</td>
                      <td>{{$data['five']*5}}</td>
                    </tr>
                    <tr class=" text-center"><td>10 rupee</td>
                      <td>{{$data['ten']}}</td>
                      <td>{{$data['ten']*10}}</td>
                    </tr>
                    <tr class=" text-center"><td>20 rupee</td>                  
                      <td>{{$data['twenty']}}</td>
                      <td>{{$data['twenty']*20}}</td>
                    </tr>
                    <tr class=" text-center"><td>50 rupee</td>
                      <td>{{$data['fifty']}}</td>
                      <td>{{$data['fifty']*50}}</td>
                    </tr>
                    <tr class=" text-center"><td>100 rupee</td>
                      <td>{{$data['hundred']}}</td>
                      <td>{{$data['hundred']*100}}</td>
                    </tr>
                    <tr class=" text-center"><td>200 rupee</td>
                      <td>{{$data['2_hundred']}}</td>
                      <td>{{$data['2_hundred']*200}}</td>
                    </tr>
                    <tr class=" text-center"><td>500 rupee</td>
                      <td>{{$data['5_hundred']}}</td>
                      <td>{{$data['5_hundred']*500}}</td>
                    </tr>
                    <tr class=" text-center"><td>2000 rupee</td>
                      <td>{{$data['2_thousand']}}</td>
                      <td>{{$data['2_thousand']*2000}}</td>
                    </tr>
                    <tr class=" text-center"><td></td>
                      <td>Total Cash Balance :</td>
                      <td>{{($data['one']*1)+($data['two']*2)+($data['five']*5)+($data['ten']*10)+
                        ($data['twenty']*20)+($data['fifty']*50)+($data['hundred']*100)+
                        ($data['2_hundred']*200)+($data['5_hundred']*500)+($data['2_thousand']*2000)}}</td>
                    </tr>
                                       
                    </tbody>
                  </table>
                      <button type="button" class='btn btn-primary' data-bs-toggle="modal" data-bs-target="#cashDispatch" >Cash Dispatch</button>                
                </div>
              
            
          </div>
    </div> 
</div>


@endsection
