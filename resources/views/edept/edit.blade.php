@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit About Us  {{$edept->name}}</div>

                <div class="card-body">
                    <form action="{{route('edept.update' , ['id' => $edept->id ])}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
						
						
						
						
                               <div class="form-group">
                                    <label for="teachers_id">teachers</label>
                                    <select class="form-control" name="teachers_id" id="teachers">
                                     
                                     @foreach ($teachers as $teachers)
                                     @if ($teachers->id == $edept->teachers_id)
                                     <option value="{{$teachers->id}}" selected>{{$teachers->name}}</option>

                                     @else
                                     <option value="{{$teachers->id}}" >{{$teachers->name}}</option>
                                     @endif
                                     
                                     @endforeach
                                       
                                     
                                    </select>
                                  </div>
								  
								
						
                          <div class="form-group">
                          <label for="title">Name</label>
                          <input type="text" class="form-control" name="name"  value="{{$edept->name}}">
                         </div>
                         <div class="form-group">
                            <label for="content">Description</label>
                            <textarea class="form-control" name="content" id="content" rows="8" cols="8">
                                    {!! $edept->content !!} 
                            </textarea>
                          </div>
                          <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featured">
                          </div>
						  
						  
						   <div class="form-group">
                            <label for="content">الاهداف و الرؤيا </label>
                            <textarea class="form-control" name="contentd" id="contentd" rows="8" cols="8">
                                    {!! $edept->contentd !!} 
                            </textarea>
                          </div>
						  
						  
						   <div class="form-group">
                            <label for="featuredg">الخريجون</label>
                            <input type="file" class="form-control-file" name="featuredg">
                          </div>
						  
						  
						   <div class="form-group">
                            <label for="featuredm">المواد </label>
                            <input type="file" class="form-control-file" name="featuredm">
                          </div>
						  
						  
						  
						  
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>      
                </div>
            </div>
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

