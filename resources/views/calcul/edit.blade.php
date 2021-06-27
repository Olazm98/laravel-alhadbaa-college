@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Call Us  {{$calcul->name}}</div>

                <div class="card-body">
                    <form action="{{route('calcul.update' , ['id' => $calcul->id ])}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
                          <div class="form-group">
                          <label for="st">Title</label>
                          <input type="text" class="form-control" name="st"  value="{{$calcul->st}}">
                         </div>
                         
						  
						 
						  <div class="form-group">
                            <label for="gr">Facebook</label>
                            <input type="text" class="form-control" name="gr"  value="{{$calcul->gr}}">
                            </div>


                        <div class="form-group">
                            <label for="em">YouTube</label>
                            <input type="text" class="form-control" name="em"  value="{{$calcul->em}}">
                            </div>


                        <div class="form-group">
                            <label for="name">Instagram</label>
                            <input type="text" class="form-control" name="pr"  value="{{$calcul->pr}}">
                            </div>


						  
						  
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
