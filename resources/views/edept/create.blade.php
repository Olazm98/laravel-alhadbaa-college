@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edept</div>

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

                    

                    <form action="{{route('edept.store')}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
						
						
						<div class="form-group">
                                    <label for="exampleFormControlSelect1">edept</label>
                                    <select class="form-control" name="teachers_id" id="teachers">
                                     @foreach ($teachers as $teachers)
                                     <option value="{{$teachers->id}}" >{{$teachers->name}}</option>
                                     @endforeach 
                                    </select>
									
									
									
							
									
						
						
						
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name"  placeholder="Enter name">
                         </div>
                         <div class="form-group">
                            <label for="content">Description</label>
                           <textarea class="form-control" name="content" id="content" rows="8" cols="8"></textarea>
                          </div>
                            <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featured">
                          </div>
						  
			
                        <div class="form-group">
                            <label for="contentd">الاهداف و الرؤيا </label>
                           <textarea class="form-control" name="contentd" id="contentd" rows="8" cols="8"></textarea>
                          </div>
						 <div class="form-group">
                            <label for="featuredg">الخريجون </label>
                            <input type="file" class="form-control-file" name="featuredg">
                          </div>
						  
						  
						  
						   <div class="form-group">
                            <label for="featuredm">المواد</label>
                            <input type="file" class="form-control-file" name="featuredm">
                          </div>
                        
                         
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>      
                   	 <div class="col-md-10">		 

						 <form action="#" class="dropzone" id="myDropzoneForm"></form>
						  
					</div>	  
                </div>
            </div>

        </div>
					<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('edepts')}}">العودة الى لوحة التحكم الاقسام    <i class="fas fa-fw fa-plus-square"></i></button></a>
    <br><br>
	</div>
</div>







@endsection
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" />
 
@endsection


@section('scripts')
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js"></script>

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

