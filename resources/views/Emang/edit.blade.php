@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit About Us  {{$emang->name}}</div>

                <div class="card-body">
                    <form action="{{route('emang.update' , ['id' => $emang->id ])}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
						
						
						
						
                               <div class="form-group">
                                    <label for="teachers_id">manges</label>
                                    <select class="form-control" name="manges_id" id="manges">
                                     
                                     @foreach ($manges as $manges)
                                     @if ($manges->id == $emang->manges_id)
                                     <option value="{{$manges->id}}" selected>{{$manges->name}}</option>

                                     @else
                                     <option value="{{$manges->id}}" >{{$manges->name}}</option>
                                     @endif
                                     
                                     @endforeach
                                       
                                     
                                    </select>
                                  </div>


						
						
						
						
                          <div class="form-group">
                          <label for="title">Name</label>
                          <input type="text" class="form-control" name="name"  value="{{$emang->name}}">
                         </div>
                         <div class="form-group">
                            <label for="content">Description</label>
                            <textarea class="form-control" name="content" id="content" rows="8" cols="8">
                                    {!! $emang->content !!} 
                            </textarea>
                          </div>
                          <div class="form-group">
                            <label for="featured">Photo</label>
                            <input type="file" class="form-control-file" name="featured">
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

