@extends('layouts.app')
@section('content')

<div class="container">
<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create About Us</div>

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

                    

                    <form action="{{route('aboutus.store')}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
                      <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title"  placeholder="Enter title">
                         </div>
                         <div class="form-group">
                            <label for="content">Description</label>
                           <textarea class="form-control" name="content" id="content" rows="8" cols="8"></textarea>
                          </div>
                            <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featured">
                          </div>
                       
                         
                         
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>      
                    







                </div>
				
            </div>
			<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('aboutus')}}">العودة الى   حول الكلية  <i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
        </div>
    </div>
</div>




@endsection

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

