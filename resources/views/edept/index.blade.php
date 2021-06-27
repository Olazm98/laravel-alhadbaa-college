@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('edept.create')}}">اضافة معلومات جديدة <i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
            <div class="card">
                <div class="card-header">تعديل وا ضافه عللى معلومات الاقسام </div>
                <div class="card-body">
               <table class="table table-striped">
               <thead>
              <tr>
             <th scope="col"> No </th>
			 <th scope="col"> Title </th>
             <th scope="col">Edit</th>
            <th scope="col">Delete</th>
                                    
           </tr>
           </thead>
          <tbody>
           @foreach ($edept as $edept)
              <tr>
                                            <th scope="row">
                                      <img src="{{$edept->featrued}}" alt="{{$edept->name}}" class="img-thumbnail" width="100px" height="100px">
                                                
                                            </th>
                                            <th scope="row">{{$edept->name}}</th>
                                            
                                            <td> 
                                              <a class="" href="{{route('edept.edit',['id' =>$edept->id ])}}">   
                                                        <i class="fas fa-edit"></i>
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="" href="{{route('edept.delete',['id' =>$edept->id ])}}">
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
