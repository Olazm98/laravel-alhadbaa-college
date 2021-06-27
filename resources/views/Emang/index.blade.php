@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('emang.create')}}">اضافة معلومات جديدة <i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
            <div class="card">
                <div class="card-header">تعديل و اضافة على معلومات الاقسام الادارية
				</div>
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
           @foreach ($emang as $emang)
              <tr>
                                            <th scope="row">
                                      <img src="{{$emang->featrued}}" alt="{{$emang->name}}" class="img-thumbnail" width="100px" height="100px">
                                                
                                            </th>
                                            <th scope="row">{{$emang->name}}</th>
                                            
                                            <td> 
                                              <a class="" href="{{route('emang.edit',['id' =>$emang->id ])}}">   
                                                        <i class="fas fa-edit"></i>
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="" href="{{route('emang.delete',['id' =>$emang->id ])}}">
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
