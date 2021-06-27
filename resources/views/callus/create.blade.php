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

                    

                    <form action="{{route('callus.store')}}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field()}}
                      <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title"  placeholder="Enter title">
                         </div>
						 
						 
						 
						 <div class="form-group">
                            <label for="name">Facebook</label>
                            <input type="text" class="form-control" name="facebook"  placeholder="Enter title">
                            </div>


                        <div class="form-group">
                            <label for="name">YouTube</label>
                            <input type="text" class="form-control" name="youtube"  placeholder="Enter youtube">
                            </div>


                        <div class="form-group">
                            <label for="name">Instagram</label>
                            <input type="text" class="form-control" name="instagram"  placeholder="Enter instagram">
                            </div>


						   <div class="form-group">
                            <label for="name">Telegram</label>
                            <input type="text" class="form-control" name="telegram"  placeholder="Enter telegram">
                            </div>
							
							
							
							
							<div class="form-group">
                            <label for="name">E-Learning</label>
                            <input type="text" class="form-control" name="e_learning"  placeholder="Enter e_learning">
                            </div>
						  
						  <div class="form-group">
                            <label for="name">T-number</label>
                            <input type="text" class="form-control" name="t_number"  placeholder="Enter t_number">
                            </div>
						  
                         
                       
                         
                         
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>      
                    







                </div>
            </div>
			<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('callus')}}">العودة للةحة تحكم اتصل بنا  <i class="fas fa-fw fa-plus-square"></i></button></a>
        </div>
    </div>
</div>
@endsection
