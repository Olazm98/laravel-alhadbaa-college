@include('include.header')

	 <link rel="stylesheet" href="css/all.min.css" rel="stylesheet" />
  

<nav class="navbar navbar-inverse visible-xs">

  <div class="container-fluid">
  
    <div class="navbar-header">
	
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
      <a class="navbar-brand" href="#">روابط تهمك </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">المكتبة الافتراضية العراقية</a></li>
        <li><a href="https://farouq.moch.gov.iq/farah/www_moedu_gov_default.html">موقع وزارة التعليم العالي والبحث العلمي</a></li>
        <li><a href="http://mohesr.gov.iq/ar/">موقع وزارة التربية العراقية</a></li>
        <li><a href="https://www.pe-gate.org/">البوابة الالكترونية لدائرة التعليم الاهلي</a></li>
		<li><a href="https://sys.pe-gate.org/student/instructions">استمارة التقديم الالكتروني للجامعات و الكليات الاهلية</a></li>
        <li><a href="https://ehcu.org/">كلية الحدباء الجامعة/التعليم الالكتروني</a></li>
        <li><a href="http://127.0.0.1:8000/form1">استمارة هوية الطالب</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>روابط تهمك </h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">المكتبة الافتراضية العراقية</a></li>
       <li><a href="http://mohesr.gov.iq/ar/">موقع وزارة التعليم العالي والبحث العلمي</a></li>
        <li><a href="https://farouq.moch.gov.iq/farah/www_moedu_gov_default.html">موقع وزارة التربية العراقية</a></li>
        <li><a href="https://www.pe-gate.org/">البوابة الالكترونية لدائرة التعليم الاهلي</a></li>
		<li><a href="https://sys.pe-gate.org/student/instructions">استمارة التقديم الالكتروني للجامعات و الكليات الاهلية</a></li>
        <li><a href="https://ehcu.org/">كلية الحدباء الجامعة/التعليم الالكتروني</a></li>
		<li><a href="http://127.0.0.1:8000/form1">استمارة هوية الطالب</a></li>
      </ul><br>
    </div>
   
   
   
   
    <br><br><br>
    <div class="col-sm-9">
      	 <!-- start Header -->
	 <div class="headerr">
	   <div class="overlayy">
	   
	    <div class="container table" >
		 
		  
		   <div class="table-row">
		    <div class="intro text-center">
		   <section class="wow slideInRight" > <h1 class="upperr">  الاقسام <span class="main-color">العلمية </span> و  <span class="main-color">الادارية </span> </h1> </section>
		   <div class="narrow text-center wow bounceInLeft">
		   <p>
		 تعرف اكثر عن كليتنا <br>
		 <br>
		  <a href="http://127.0.0.1:8000/dep"> <button class="hire upper">الاقسام العلمية</button></a>
		   <a href="http://127.0.0.1:8000/mang"> <button class="upper">الاقسام الادارية</button></a>
		   </p>
		   
                  
		   </div></div></div>
		   
		   
		   </div></div></div></div></div>
		   
		   <!-- end header -->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	   <div class="widget--title">
                                  
                                </div>
	  
	  
	    @foreach ($calcul as $calcul)
  <div class="row">
        <div class="col-sm-3">
          <div class="well1">
		  <center>
            <h4><i class="fa fa-fw  fa-chalkboard-teacher"></i> الطلاب</h4>
			
            <p>{{$calcul->st}}</p> 
			 </center>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well2">
		   <center>
		   
            <h4><i class="fas fa-user-graduate"></i>  الخريجون</h4>
            <p>{{$calcul->gr}}</p> 
			 </center>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well3">
		   <center>
            <h4><i class="fa fa-fw  fa-user-tie"></i>  الموظفين</h4>
            <p>{{$calcul->em}}</p>
            </center>			
          </div>
        </div>
		 <div class="col-sm-3">
          <div class="well4">
		   <center>
            <h4> <i class="fas fa-user-friends"></i>التدريسيون </h4>
            <p>{{$calcul->pr}}</p> 
			 </center>
          </div>
        </div>
		</div>
	  
	     @endforeach     
	  
	  
	  
	  <div class="widget--title">
                                    <center>  <span class="main-color" >الاخبار</span>
                                    <i class="icon fa fa-newspaper-o"></i>
									</center>
                                </div>

	 
	  <div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
					<a class="post-img" href="{{route('post.show', ['slug' => $first_post->slug])}}"><img src="{{$first_post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$first_post->category->name}}</a>
							</div>
							<h3 class="post-title title-lg"><a href="#">{{$first_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="category.html">{{$first_post->category->name}}</a></li>
								<li>{{$first_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{$second_post->featrued}}" alt="" width="300px" height="300px"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$second_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$second_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$second_post->category->name}}</a></li>
								<li>{{$second_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{$third_post->featrued}}" alt="" width="300px" height="300px"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">{{$third_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">{{$third_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$third_post->category->name}}</a></li>
								<li>{{$third_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	  
	  
	  
	  
	  
	  

	 <div class="widget--title">
                                    <h2 class="h4"  align="right">الاخبار العامة
                                    <i class="icon fa fa-newspaper-o"></i></h2>
                                </div>
  



   
    @foreach ($news->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
<div class="container">    
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">{{$post->category->name}}</div>
        <div class="panel-body">   <img src="{{$post->featrued}} " alt="" width="200px" height="200px" ></div>
        <div class="panel-footer">{{$post->title}}</div>
      </div>
	  
    </div>
   @endforeach
  </div>
  
</div>



 <div class="widget--title">
                                    <h2 class="h4"  align="right">الاعلانات
                                    <i class="icon fa fa-newspaper-o"></i></h2>
                                </div>

 @foreach ($newss->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
<div class="container">    
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">{{$post->category->name}}</div>
        <div class="panel-body">   <img src="{{$post->featrued}} " alt="" width="200px" height="200px" ></div>
        <div class="panel-footer">{{$post->title}}</div>
      </div>
	  
    </div>
   @endforeach
  </div>
  
</div>






<div class="widget--title">
                                    <h2 class="h4"  align="right">النشاطات
                                    <i class="icon fa fa-newspaper-o"></i>
									</h2>
                                </div>



 @foreach ($newsss->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
<div class="container">    
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">{{$post->category->name}}</div>
        <div class="panel-body">   <img src="{{$post->featrued}} " alt="" width="200px" height="200px" ></div>
        <div class="panel-footer">{{$post->title}}</div>
      </div>
	  
    </div>
   @endforeach
  </div>
  
</div>



<div class="widget--title">
                                    <h2 class="h4" align="right">المؤتمرات
                                    <i class="icon fa fa-newspaper-o"></i>
									</h2>
                                </div>





 @foreach ($newssss->posts()->orderBy('created_at','desc')->take(4)->get() as $post)
<div class="container">    
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">{{$post->category->name}}</div>
        <div class="panel-body">   <img src="{{$post->featrued}} " alt="" width="200px" height="200px" ></div>
        <div class="panel-footer">{{$post->title}}</div>
      </div>
	  
    </div>
   @endforeach
  </div>
  
</div>









		  
			
			
			
			
			
			
			
			
			
		  
	
				<!-- start our work
			<div class="our-work text-center">
			  <div class="container">
			   <h2 class="upper">لدينا <span class="main-color">الاقسام</span></h2>
			      <p>: تضم كلية الحدباء اقسام علمية و انسانية و هي  </p>
				 @foreach ($edept as $edept)
				<div class="items-box">
                 <div class="item">
                 <img src="{{$edept->featrued}}" alt="{{$edept->name}}">
				  <div class="over text-center">
				  <h4 class="upper"><a href="{{route('edept.edit',['id' =>$edept->id ])}}">{{$edept->name}}</a></h4>
				  <p>  {{$edept->contentd}}  </p>
				   <button class="upper">show Project</button>
				  
				  </div>
				  
			</div>  @endforeach</div>      </div>  </div> 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- start our work 
	<div class="image"> 
 <img src="../img/7.jpg" alt="" /> 
 <div class="caption"> 
 <h3>My Cool Title</h3>
 </div>
 </div>-->	
 	


 
 
 
 
 
@include('include.footer')
	
	
	
		   
		   
		   
		   
		   
		   
		   
		   
		   <script src="js/jquery-1.12.1.min.js"></script>
	 <script src="js/jquery.nicescroll.min.js"></script>
	  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
	 <script src="js/scriptt.js"></script>
	 </body>
</html>	 