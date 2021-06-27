@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit About Us  {{$form1->name}}</div>

                <div class="card-body">
                    <form action="{{route('form1.update' , ['id' => $form1->id ])}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
						
						
						
						
                               <div class="form-group">
                                    <label for="teachers_id">teachers</label>
                                    <select class="form-control" name="teachers_id" id="teachers">
                                     
                                     @foreach ($teachers as $teachers)
                                     @if ($teachers->id == $form1->teachers_id)
                                     <option value="{{$teachers->id}}" selected>{{$teachers->name}}</option>

                                     @else
                                     <option value="{{$teachers->id}}" >{{$teachers->name}}</option>
                                     @endif
                                     
                                     @endforeach
                                       
                                     
                                    </select>
                                  </div>
								  
								
						
						
						
						
						
						
						
                          <div class="form-group">
                          <label for="title">Name</label>
                          <input type="text" class="form-control" name="name"  value="{{$form1->name}}">
                         </div>
						 
						 
						 
						 <div class="form-group">
                                    <label for="exampleFormControlSelect1">المرحلة </label>
                                    <select class="form-control" name="stage" id="form1">
                                     {!! $form1->stage !!} 
                                     <option value="المرحلة الاولى "> </option>
									 <option value="المرحلة الثانيه "> </option>
									  <option value="المرحلة الثالثة  "> </option>
									  <option value="المرحلة الرابعه   "> </option>
                                     
                                    </select>
						 
						 
                        
                          <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featured">
                          </div>
						  
						  
						  <div class="form-group">
                                    <label for="exampleFormControlSelect1">الدراسة </label>
                                    <select class="form-control" name="typestu" id="form1">
                                     {!! $form1->typestu !!}
                                     <option value="الصباحية"> </option>
									 <option value="المسائيه"> </option>
                                     
                                    </select>
						  
		
						  
						  
						   <div class="form-group">
                          <label for="title">العنوان </label>
                          <input type="text" class="form-control" name="addres"  value="{{$form1->addres}}">
                         </div>
						  
						  
						  
						  
						 <div class="form-group">
                          <label for="title">الميلاد </label>
                          <input type="text" class="form-control" name="bd"  value="{{$form1->bd}}">
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

