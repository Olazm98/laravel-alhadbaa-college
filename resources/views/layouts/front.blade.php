
<!DOCTYPE html>
<html>
   <head lang="en">
     <meta charset="utf-8">
	 <link rel="stylesheet" href="css/all.min.css" rel="stylesheet" />
	 <link rel="stylesheet" href="css/normalize.css">
	 <link rel="stylesheet" href="css/animate.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" >
	  <style>
    /* Add a gray background color and some padding to the footer */
	body{
		background-color:#1024358a;
	}
	h1 {
    color: #d6ab4c;
    text-align: center;
}

.p1{
	 color: #d6ab4c;
    text-align: center;
    font-size: 197%;
    font-style: italic;
}
.p2 {
    color: #060606ad;
    text-align: center;
    font-size: 153%;
    font-style: oblique;
}
.img1{
	background-size: 100%;
    border: 6px solid #987332;
	align:center;
}
  
  </style>
	 </head>
	 <body >

		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url('{{$post->featrued}}');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{$title}}</h1>
						<center>
						<img class="img1" src="{{$post->featrued}} " alt="" width="500px" height="500px" >
					</center>
						<p class="p1">{{$post->category->name}}</p1>
					
					</div>
						<p class="p2">{{$post->content}}</p>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 

		   
		@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

@endsection


@section('scripts')
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script>
    $(document).ready(function() {
      $('#content').summernote();
    });
</script>

@endsection

 
