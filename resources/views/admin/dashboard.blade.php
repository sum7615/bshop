@extends('layouts.master')
@section('title')
Dashboard
@endsection

@section('content')
@if(!Session::has('adminData'))
<script type='text/javascript'>
window.location.href="{{url('/login')}}"
</script>
@endif


      <div class="row">
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body bg-secondary text-white">
                        <div class="row">
                            <div class="col">

                                <h5 class="card-title text-uppercase mb-0">Sales</h5>
                                <p>(till now)</p>
                                
                                <span class="h2 font-weight-bold mb-0">                               
                          {{$total}}
                            
                            </span>
                          
                                
                                
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body bg-secondary text-white">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase mb-0">Staff</h5>
                                <p>(working)</p>
                                <span class="h2 font-weight-bold mb-0">{{$working}}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                <i class="fas fa-people-carry"></i>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body bg-secondary text-white">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase  mb-0">Cash Balance</h5>
                                <p>(till now)</p>
                                <span class="h2 font-weight-bold mb-0">
                                    @foreach($cash as $cash)
                                        {{($cash['one']*1)+($cash['two']*2)+($cash['five']*5)+($cash['ten']*10)+
                                        ($cash['twenty']*20)+($cash['fifty']*50)+($cash['hundred']*100)+
                                        ($cash['2_hundred']*200)+($cash['5_hundred']*500)+($cash['2_thousand']*2000)}}
                                    @endforeach
                                </span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                <i class="fas fa-cash-register"></i>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body bg-secondary text-white">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase mb-0">Pay Out</h5>
                                <p>(till now)</p>
                                <span class="h2 font-weight-bold mb-0">{{$totalPayOut}}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                <i class="fas fa-money-check-alt"></i>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
       
</div>

<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase  ls-1 mb-1">Last Sale</h6>
                            </div>
                            <div class="col text-right">
                                <a href="{{url('/allSale')}}" class="btn btn-sm btn-primary">See all</a>
                                </div>
                           
                        </div>
                        <table class="table" id='myTable'>

                                <thead class="thead-light">
                                <tr>
                                    <th >Item</th>
                                    <th >Quantity</th>
                                    <th >Amount</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                        @foreach($sale as $sale)

                                <tr>
                                    
                                   <td>{{$sale['product']}}</td>
                                   <td>{{$sale['quantity']}}</td>
                                   <td>{{$sale['amount']}}</td>
                                   
                                </tr>
                            @endforeach
                             
                            </tbody>

                        </table>
                    </div>
                   
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Panding Order</h6>
                            </div>
                                <div class="col text-right">
                                <a href="{{url('/getOrder')}}" class="btn btn-sm btn-primary">See all</a>
                                </div>
                                <table class="table" id='myTable'>
                                <thead class="thead-light">
                                <tr>
                                    <th >Item</th>
                                    <th >Quantity</th>
                                    <th >Time</th>
                                    <th >Action</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $order)
                      
                                <tr>
                                   <td>{{$order['product']}}</td>
                                   <td>{{$order['quantity']}}</td>
                                   <td>{{$order['delivery_time']}}</td>
                                   <td>                                                                      
                                    <a href="{{url('/getOrder').'/'.$order['id']}}"><i class="far fa-edit"> </i> </a>
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
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Critical Stock</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush" id='myTable'>
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity left</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stock as $stock)
                                <tr>
                                   <td>{{$stock['name']}}</td>
                                   <td>{{$stock['quantity']}}</td>

                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Pay Out</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush" id='myTable'>
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Vendor</th>
                                    <th scope="col">Amount</th>
                              
                                </tr>
                            </thead>
                            <tbody>
                         
                                @foreach($pay as $pay)
                              
                                <tr>
                                    <td>{{$pay['product']}}</td>
                                    <td>{{$pay['vendor']}}e</td>
                                    <td>{{$pay['amount']}}</td>
                                </tr>
                                
                                     @endforeach 
                                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection

@section('script')

@endsection

