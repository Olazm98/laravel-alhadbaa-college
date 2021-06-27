@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Call Us  {{$callus->name}}</div>

                <div class="card-body">
                    <form action="{{route('callus.update' , ['id' => $callus->id ])}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
                          <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title"  value="{{$callus->title}}">
                         </div>
                         
						  
						 
						  <div class="form-group">
                            <label for="name">Facebook</label>
                            <input type="text" class="form-control" name="facebook"  value="{{$callus->facebook}}">
                            </div>


                        <div class="form-group">
                            <label for="name">YouTube</label>
                            <input type="text" class="form-control" name="youtube"  value="{{$callus->youtube}}">
                            </div>


                        <div class="form-group">
                            <label for="name">Instagram</label>
                            <input type="text" class="form-control" name="instagram"  value="{{$callus->instagram}}">
                            </div>


						   <div class="form-group">
                            <label for="name">Telegram</label>
                            <input type="text" class="form-control" name="telegram"  value="{{$callus->telegram}}">
                            </div>
							
							
							
							
							<div class="form-group">
                            <label for="name">E-Learning</label>
                            <input type="text" class="form-control" name="e_learning"  value="{{$callus->e_learning}}">
                            </div>
						  
						  <div class="form-group">
                            <label for="name">T-number</label>
                            <input type="text" class="form-control" name="t_number"  value="{{$callus->t_number}}">
                            </div>
						  
						  
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
