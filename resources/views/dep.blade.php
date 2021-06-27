@include('include.header')

	 <link rel="stylesheet" href="css/all.min.css" rel="stylesheet" />
  

	
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
				   <button class="upper">تعرف على القسم اكثر </button>
				  
				  </div>
				  
			</div>  @endforeach</div>      </div>  </div> 
	
	
	  
	  