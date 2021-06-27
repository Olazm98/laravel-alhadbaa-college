@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Call Us</div>

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

                    

                    <form action="{{route('calcul.store')}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
                      <div class="form-group">
                          <label for="st">Title</label>
                          <input type="text" class="form-control" name="st"  placeholder="Enter title">
                         </div>
						 
						 
						 
						 <div class="form-group">
                            <label for="gr">Facebook</label>
                            <input type="text" class="form-control" name="gr"  placeholder="Enter title">
                            </div>


                        <div class="form-group">
                            <label for="em">YouTube</label>
                            <input type="text" class="form-control" name="em"  placeholder="Enter youtube">
                            </div>


                        <div class="form-group">
                            <label for="pr">Instagram</label>
                            <input type="text" class="form-control" name="pr"  placeholder="Enter instagram">
                            </div>


						 
							
							
							
							
						
                         
                         
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>      
                    







                </div>
            </div>
			<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('calcul')}}">العودة للةحة تحكم اتصل بنا  <i class="fas fa-fw fa-plus-square"></i></button></a>
        </div>
    </div>
</div>
@endsection
