<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('styles')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="page-top" >
 
  <!-- Page Wrapper -->
  <div id="wrapper">
   
       
         
    <div class="col-sm-3.5">           
                @if (Auth::user())

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-10">
		 <img src="css/o.png" width="60px">
         
        </div>
        <div class="sidebar-brand-text mx-3">لوحة تحكم كلية الحدباء</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

    <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>الاضافات</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">الاضافات:</h6>
            <a class="dropdown-item" href="{{route('category.create')}}">Create</a>
                            <a class="dropdown-item" href="{{route('categories')}}">الاضافات</a>
                             </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>التصنيف</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">التصنيف:</h6>
            <a class="dropdown-item" href="{{route('tag.create')}}">Create</a>
                                <a class="dropdown-item" href="{{route('tags')}}"> التصنيفات</a>
                               </div>
        </div>
      </li>

     <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>الاستمارات </span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">استمارات ل طلب .....</h6>
            <a class="dropdown-item" href="{{route('form1s')}}"><i class="fas fa-fw  fa-check-square"></i> استمارة لطلب هوية طالب </a>
    
          </div>
        </div>
      </li>
	  
	  
	  
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
       <a class="dropdown-item" href="{{route('posts')}}"><i class="fas fa-fw  fa-newspaper"></i> الاخبار</a>
         
      </li>
	  
	  
	   <!-- Nav Item - Charts -->
      <li class="nav-item">
	  
        <a class="dropdown-item" href="{{route('teachers')}}"> <i class="fas fa-fw  fa-brain"></i> الاقسام العلميه</a>
         
      </li>
	  
	   <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="dropdown-item" href="{{route('edepts')}}"><i class="fas fa-fw  fa-pencil-alt"></i>     تعديل معلومات الاقسام </a>
         
      </li>
	  
	  
	   <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="dropdown-item" href="{{route('manges')}}"><i class="fas fa-fw  fa-user-tie"></i>    الاقسام الاداريه</a>
          
      </li>
	  
	  
	    <!-- Nav Item - Charts -->
      <li class="nav-item">
         <a class="dropdown-item" href="{{route('emangs')}}"><i class="fas fa-fw  fa-edit"></i>        تعديل  الاقسام الاداريه</a>
         
      </li>
	  
	  
	   <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="dropdown-item" href="{{route('callus')}}"><i class="fas fa-fw  fa-phone-square"></i> اتصل بنا</a>
         
      </li>
	  
	  
	   <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="dropdown-item" href="{{route('prefs')}}"> <i class="fas fa-fw  fa-chalkboard-teacher"></i>     التدريسيون</a>
         
      </li>
	  
	   
	   <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="dropdown-item" href="{{route('aboutus')}}"> <i class="fas fa-fw  fa-university"></i>     حول الكليه</a>
         
      </li>
	  
	  
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="dropdown-item" href="{{route('grats')}}"><i class="fas fa-fw  fa-graduation-cap"></i>   الخريجون </a>
         
      </li>
	  
	  
	    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="dropdown-item" href="{{route('calcul')}}"><i class="fas fa-fw  fa-graduation-cap"></i>   الاحصائيات </a>
         
      </li>
	  
	  
	  
	   <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="dropdown-item" href="{{route('settings')}}"><i class="fas fa-fw  fa-graduation-cap"></i>   الاعدادات </a>
         
      </li>
	  
	  
	  
	  
	  
	                        <!-- اضافة تسجيل الخروج -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a  class="nav-link"  >
                                   
                                </a>
                               
							   
							   
							   
							   <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        {{ Auth::user()->name }} <span class="caret"></span>
      </div>
							   
							   
							   
							   
							   
                        
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													 <i class="fas fa-fw  fa-sign-out-alt"></i>
													 
                                        {{ __('Logout') }} 
                                    </a>
									
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
					
<!-- النهاية -->
	  
	  @endif
	
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
					
                </div>
				
            </div>
			
        </nav>
		
        

  
            @yield('content')
        </main>
    </div>
    @yield('scripts')
	  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js" integrity="sha512-0QMJSMYaer2wnpi+qbJOy4rOAlE6CbYImSlrgQuf2MBBMqTvK/k6ZJV126/EbdKzMAXaB6PHzdYxOX6Qey7WWw==" crossorigin="anonymous"></script>
</body>
</html>


