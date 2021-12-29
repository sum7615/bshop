
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="{{ url('/') }}/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
      
        <a href="#" class="simple-text logo-normal">
         BShop
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url('/adminDashboard')}}">
            <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{url('/stockIn')}}">
            <i class="fas fa-arrow-left"></i>
              <p>Stock In</p>
            </a>
          </li>
          <li>
            <a href="{{url('/sale')}}">
             <i class="fas fa-rupee-sign"></i>
              <p>Sale</p>
            </a>
          </li>
          <li>
            <a href="{{url('/stock')}}">
            <i class="fas fa-cubes"></i>
              <p>Stock Monitor</p>
            </a>
          </li>
          <li>
            <a href="{{url('/getOrder')}}">
            <i class="fas fa-sort"></i>
              <p>Order</p>
            </a>
          </li>
          <li>
            <a href="{{url('/payOut')}}">
            <i class="fas fa-file-invoice-dollar"></i>
              <p>Pay Out</p>
            </a>
          </li>
          
          <li>
            <a href="{{url('/employee')}}">
            <i class="fas fa-user-friends"></i>
              <p>Employee</p>
            </a>
          </li>
          
          <li>
            <a href="{{url('/contact')}}">
            <i class="fas fa-address-book"></i>
              <p>Contact</p>
            </a>
          </li>
          <li>
            <a href="{{url('/cash')}}">
            <i class="fas fa-money-bill"></i>
              <p>Cash Monitor</p>
            </a>
          </li>
          <li>
            <a href="{{url('/bank')}}">
            <i class="fas fa-piggy-bank"></i>
              <p>Banking</p>
            </a>
          </li>
          <li>
          
            <a href="{{url('/document')}}">
            <i class="fas fa-folder"></i>
              <p>Documents</p>
            </a>
          </li>
          <li>
            <a href="{{url('/bill')}}">
            <i class="fas fa-file-invoice"></i>
              <p>Bill</p>
            </a>
          </li>
          
          
          <li>
            <a href="{{url('/report')}}">
            <i class="fas fa-sitemap"></i>
              <p>Report</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
                </div>
              
                <?php if(!empty(Session::get('name'))) 
                { echo Session::get('name'); } ?>
               
              </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
              <li class="nav-item">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>

                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
              
                    <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                  </div>
                </li> 
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

 

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
          @yield('content')



      </div>
      <footer class="footer border-top">
        <div class=" container-fluid ">
         
          <div class="copyright text-muted" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed and Developed by <a href='https://www.linkedin.com/in/suman-paul-7929a187/'>Suman</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('/') }}/assets/js/core/jquery.min.js"></script>
  <script src="{{ url('/') }}/assets/js/core/popper.min.js"></script>

  <script src="{{ url('/') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
  <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
   <script> $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>

  @yield('script')
</body>

</html>




