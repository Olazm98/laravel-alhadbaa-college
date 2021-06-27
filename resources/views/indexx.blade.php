 @include('include.header')
<!DOCTYPE html>
<html>
   <head lang="en">
     <meta charset="utf-8">
	 <link rel="stylesheet" href="css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/normalize.css">
	 <link rel="stylesheet" href="css/stylee.css">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" >
	 </head>
	 <body>
	 
	 <!-- start Header -->
	 <div class="header">
	   <div class="overlay">
	    <div class="container table">
		  <div class="navbar">
		   <span>Tanatos <span class="main-color">Studio</span></span>
		   <span class="links">Menu<i class="fa fa-bars fa-lg"></i>
		   </span>
		   </div>
		   
		   <div class="table-row">
		    <div class="intro text-center">
		   <h1 class="upper">We Design <span class="main-color">Thinge</span></h1>
		   <p>
		   Careate website form Preview
		   Careate website form Preview<br>
		   Careate website form Preview
		   Careate website
		   </p>
		   <div class="buttons">
		   <button class="hire upper">Hire Us</button>
		    <button class="upper">Our Works</button>
		   </div></div></div></div>
		   <span class="arrow"> <i class="fa fa-chevron-down"></i> </span>
		   </div></div>
		   <!-- end header -->
	
	<!-- start features -->
		   <div class="features text-center">
		     <div class="container">
		      <div class="box">
			    <i class="fa fa-fax fa-3x"></i>
		         <h3>Print Design</h3>
				 <p>  Careate website form Preview
				   Careate website form Preview
				     Careate website form Preview
				   </p>
				   </div>
				     <div class="box">
			    <i class="fa fa-desktop fa-3x"></i>
		         <h3>Print Design</h3>
				 <p>  Careate website form Preview
				   Careate website form Preview
				     Careate website form Preview
				   </p>
				   </div>
				     <div class="box">
			    <i class="fa fa-mobile fa-3x"></i>
		         <h3>Wab Design</h3>
				 <p>  Careate website form Preview
				   Careate website form Preview
				     Careate website form Preview
				   </p>
				   </div>
				     <div class="box">
			    <i class="fa fa-home fa-3x"></i>
		         <h3>App Design</h3>
				 <p>  Careate website form Preview
				   Careate website form Preview
				     Careate website form Preview
				   </p>
				   </div>
		   </div></div>
		    <!-- end features -->
	
			<!-- start subscribe -->
			
			<div class="subscribe">
			 <div class="overlay">
			  <div class="container">
			    <form>
				<input type="email" name="email" placeholder="Enter Your Email ">
				<button class="upper">Subscribe</button>
				</form>
				</div></div>
				</div>
			<!-- end subscribe -->
			
				<!-- start our work -->
			<div class="our-work text-center">
			  <div class="container">
			   <h2 class="upper">Our <span class="main-color">Work</span></h2>
			      <p> Careate website form Preview
				     Careate website form Preview </p>
					  @foreach ($edept as $edept)
				<div class="items-box">
                 <div class="item">
                 <img src="{{$edept->featrued}}" alt="{{$edept->name}}">
				  <div class="over text-center">
				  <h4 class="upper"><a href="{{route('edept.edit',['id' =>$edept->id ])}}">{{$edept->name}}</a></h4>
				  <p>Careate website form Preview
				  Careate website form Preview
				  Careate website form Preview
				  Careate website form Preview</p>
				   <button class="upper">show Project</button>
				  </div>
			</div>
			 
			</div>
			  <button class="show-more upper">show more</button>
			</div>
			 @endforeach 
			</div>
			
			<!-- start testimonials -->
			<div class="testim text-center">
			 <div class="overlay">
			   <div class="container">
			     <div class="client active">
				  <img src="images/22.png" alt="" />
				  <p>Careate website form PreviewCareate website form<br>Careate website form Preview</p>
				  <span>Ola Majid</span>
				  </div>
				   <div class="client hidden">
				  <img src="images/22.png" alt="" />
				  <p>Careate website form PreviewCareate website form<br>Careate website form Preview</p>
				  <span>Ahmed Ali</span>
				  </div>
				   <div class="client hidden">
				  <img src="images/22.png" alt="" />
				  <p>Careate website form PreviewCareate website form<br>Careate website form Preview</p>
				  <span>Noor Ali</span>
				  </div>
				   <div class="client hidden">
				  <img src="images/22.png" alt="" />
				  <p>Careate website form PreviewCareate website form<br>Careate website form Preview</p>
				  <span>Adam Ahmed</span>
				  </div>
				  <i class="fa fa-chevron-right fa-2x"></i>
				  <i class="fa fa-chevron-left fa-2x"></i>
				  </div></div></div>
			<!-- End testimonials -->
			
			
			
			
			
			
			
				<!-- start our team -->
			<div class="our-team text-center">
			 <div class="container">
			   <h2 class="upper">our <span class="main-color">Team</span></h2>
		   <p class="main">
		   Careate website form Preview
		   Careate website form Preview<br>
		   Careate website form Preview
		   Careate website
		   </p>
		   @foreach ($pref as $pref)
		   <div class="the-team">
		   <div class="person">
		  <img src="{{$pref->featrued}}" alt="{{$pref->name}}" class="img-thumbnail" width="100px" height="100px">
		   <h3 class="upper"><a href="{{route('pref.edit',['id' =>$pref->id ])}}">{{$pref->name}}</a></h3>
		   <div class="social-icons">
		   <i class="fa fa-facebook fa-lg"></i>
		   <i class="fa fa-twitter fa-lg"></i>
		   <i class="fa fa-google-plus fa-lg"></i>
		   </div>
		   
		 
		   </div>
		    
		   </div>
		   @endforeach 
		   </div>
			
			<!-- end our team -->
			
			<!-- start contact form  -->
		 <div class="contact text-center">
			  <div class="overlay">
			    <div class="container">
				   <h2 class="upper">say <span class="main-color">Hllo</span></h2>
				   <p class="main">Careate website form Preview<br>Careate website form Preview </p>
				<form>
				  <input type="email" name="mail" placeholder="Enter Your Email">
				  <input type="text" name="subject"  placeholder="Enter Your Subject name">
				  <textarea placeholder="Enter Your Message"></textarea>
				  <div class="info">
				  <button class="upper">Hier Us</button>
				  <span class="form-icons">
				      <i class="fa fa-facebook fa-lg"></i>
		              <i class="fa fa-twitter fa-lg"></i>
		              <i class="fa fa-google-plus fa-lg"></i>
				  </span>
				  </div>
				</form>
			</div></div></div>
			<!-- end contact form  -->
			<!-- start footer  -->
			<div class="footer">
			  <div class="container">
			    <span class="copyright upper">&copy 2020 web design studio</span>
				<span class="design upper"> design by : ola </span>
				</div></div>
			<!-- end footer  -->
	
	 <script src="js/jquery-1.12.1.min.js"></script>
	 <script src="js/jquery.nicescroll.min.js"></script>
	 <script src="js/scriptt.js"></script>
	 </body>
</html>	 