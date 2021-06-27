@include('include.header2')


<br><br><br>


 <link rel="stylesheet" href="css/more.css">
	  @foreach ($aboutus as $aboutus)
				 

	
	<body background=" {{$aboutus->featrued}}">
	  <div class="contacttt">
	  	
		 <div class="contacttt_us">
		 <h2> {{$aboutus->title}} </h2>
		  {{$aboutus->content}}
         </div></div>
	 
	
	  @endforeach
	  