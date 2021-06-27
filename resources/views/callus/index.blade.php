@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('callus.create')}}">اضافة معلومات جديدة <i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
            <div class="card-1">
                <div class="card-header">اتصل بنا </div>
                <div class="card-body">
               <table class="table table-striped">
               <thead>
              <tr>
             <th scope="col"> No </th>
			 <th scope="col"> Facebook </th>
			 <th scope="col"> YouTube </th>
			 <th scope="col"> Instagram </th>
			 <th scope="col"> Telegram </th>
			 <th scope="col"> e-learning </th>
			  <th scope="col"> t-number</th>
             <th scope="col">Edit</th>
            <th scope="col">Delete</th>
                                    
           </tr>
           </thead>
          <tbody>
           @foreach ($callus as $callus)
              <tr>
                                           
                                                 <th scope="row">{{$callus->title}}</th>
											      <th scope="row">{{$callus->facebook}}</th>
											      <th scope="row">{{$callus->youtube}}</th>
											      <th scope="row">{{$callus->instagram}}</th>
											      <th scope="row">{{$callus->telegram}}</th>
												  <th scope="row">{{$callus->e_learning}}</th>
												  <th scope="row">{{$callus->t_number}}</th>
												    
                                            
                                            <td> 
                                              <a class="" href="{{route('callus.edit',['id' =>$callus->id ])}}">   
                                                        <i class="fas fa-edit"></i>
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="" href="{{route('callus.delete',['id' =>$callus->id ])}}">
                                                    <i class="far fa-trash-alt"></i>
                                            </a>
                                           </td> 
                                          </tr>
                                    @endforeach                         
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
