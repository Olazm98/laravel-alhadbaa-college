@include('include.header2')

 <link rel="stylesheet" href="css/call.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
 <div class="form">
	  <div class="container">
	  
	     @foreach ($callus as $callus)
	   <div class="links">
	   
	     <p><i class="fa fa-facebook"></i>{{$callus->facebook}}</p>
	     <p><i class="fa fa-instagram"></i>{{$callus->instagram}}</p>
	     <p><i class="fa fa-home"></i>{{$callus->title}}</p>
	     <p><i class="fa fa-telegram"></i>{{$callus->telegram}}</p>
	     <p><i class="fa fa-telegram"></i>{{$callus->e_learning}}</p>
		 <p><i class="fa fa-telegram"></i>{{$callus->t_number}}</p>
	   </div></div></div>
	   @endforeach             
	      