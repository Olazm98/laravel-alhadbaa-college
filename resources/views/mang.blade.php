@include('include.header')

	 <link rel="stylesheet" href="css/all.min.css" rel="stylesheet" />
  

	
			<div class="our-work text-center">
			  <div class="container">
			   <h2 class="upper">الاقسام <span class="main-color">الادارية</span></h2>
			      <p> </p>
				 @foreach ($emang as $emang)
				<div class="items-box">
                 <div class="item">
                 <img src="{{$emang->featrued}}" alt="{{$emang->name}}">
				  <div class="over text-center">
				  <h4 class="upper"><a href="{{route('emang.edit',['id' =>$emang->id ])}}">{{$emang->name}}</a></h4>
				  <p>  {{$emang->contentd}}  </p>
				   <button class="upper">المزيد</button>
				  
				  </div>
				  
			</div>  @endforeach</div>      </div>  </div> 
	
	
	  
	  