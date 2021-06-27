@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('form1.create')}}">اضافة معلومات جديدة <i class="fas fa-fw fa-plus-square"></i></button></a>
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
           @foreach ($form1 as $form1)
              <tr>
                                            <th scope="row">
                                      <img src="{{$form1->featrued}}" alt="{{$form1->name}}" class="img-thumbnail" width="100px" height="100px">
                                                
                                            </th>
                                            <th scope="row">{{$form1->name}}</th>
                                            
                                            <td> 
                                              <a class="" href="{{route('form1.edit',['id' =>$form1->id ])}}">   
                                                        <i class="fas fa-edit"></i>
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="" href="{{route('form1.delete',['id' =>$form1->id ])}}">
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
