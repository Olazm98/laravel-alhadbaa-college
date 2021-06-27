



<br><br><br><br><br><br>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> فورم الحصول على هوية الطالب </div>

                <div class="card-body">

                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif

                    

                    <form action="{{route('form1.store')}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
						
						
						
						 <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name"  placeholder="Enter name">
                         </div>
						
						
						<div class="form-group">
                                    <label for="exampleFormControlSelect1">form1</label>
                                    <select class="form-control" name="teachers_id" id="teachers">
                                     @foreach ($teachers as $teachers)
                                     <option value="{{$teachers->id}}" >{{$teachers->name}}</option>
                                     @endforeach 
                                    </select>
									
									
									
							
									
						
						
						
                     
                        
						<div class="form-group">
                                    <label for="exampleFormControlSelect1">المرحلة </label>
                                    <select class="form-control" name="stage" id="form1">
                                    
                                     <option value="المرحلة الاولى ">المرحلة الاولى </option>
									 <option value="المرحلة الثانيه ">المرحلة الثانيه </option>
									  <option value="المرحلة الثالثة  "> المرحلة الثالثة</option>
									  <option value="المرحلة الرابعه   "> المرحلة الرابعه</option>
                                     
                                    </select>
						
						
                          
                        
						<div class="form-group">
                                    <label for="exampleFormControlSelect1">الدراسة </label>
                                    <select class="form-control" name="typestu" id="form1">
                                    
                                     <option value="الصباحية">الصباحية </option>
									 <option value="المسائيه">المسائيه </option>
                                     
                                    </select>
						
						
						 <div class="form-group">
                          <label for="name">العنوان </label>
                          <input type="text" class="form-control" name="addres"  placeholder="Enter addres">
                         </div>
						    <div class="form-group">
                          <label for="name">ميلاد</label>
                          <input type="text" class="form-control" name="bd"  placeholder="Enter BD">
                         </div>
                         
						 
						  <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featured">
                          </div>
                         
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>      
                   
                </div>
            </div>

        </div>
					
	</div>
	
</div>
 <br><br>

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
<script>
    $(document).ready(function() {
      $('#contentd').summernote();
    });
</script>

@endsection

