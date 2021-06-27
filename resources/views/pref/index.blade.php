@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<button type="button" class="btn btn-success">   <a class="dropdown-item" href="{{route('pref.create')}}">اضافة معلومات جديدة <i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
            <div class="card">
                <div class="card-header">الكادر التدريسي</div>
                <div class="card-body">
               <table class="table table-striped">
               <thead>
              <tr>
             <th scope="col"> No </th>
			 <th scope="col"> name </th>
             <th scope="col">Edit</th>
            <th scope="col">Delete</th>
                                    
           </tr>
           </thead>
          <tbody>
           @foreach ($pref as $pref)
              <tr>
                                            <th scope="row">
                                      <img src="{{$pref->featrued}}" alt="{{$pref->name}}" class="img-thumbnail" width="100px" height="100px">
                                                
                                            </th>
                                            <th scope="row">{{$pref->name}}</th>
                                            
                                            <td> 
                                              <a class="" href="{{route('pref.edit',['id' =>$pref->id ])}}">   
                                                        <i class="fas fa-edit"></i>
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="" href="{{route('pref.delete',['id' =>$pref->id ])}}">
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
