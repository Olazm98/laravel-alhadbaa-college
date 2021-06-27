@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<button type="button" class="btn btn-success"> <a class="dropdown-item" href="{{route('teacher.create')}}">اضافة قسم جديد<i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
		  <div class="card">
                <div class="card-header">الاقسام العلمية</div>
                <div class="card-body">
               <table class="table table-striped">
               <thead>
              <tr>
             <th scope="col"> No </th>
             <th scope="col">Edit</th>
            <th scope="col">Delete</th>
                                    
           </tr>
           </thead>
          <tbody>
           @foreach ($teachers as $teacher)
               <tr>
              <th scope="row">{{$teacher->name}}</th>
           <td> 
           <a class="" href="{{route('teacher.edit',['id' =>$teacher->id ])}}">
           <i class="fas fa-edit"></i>
           </a>
           </td>
           <td> 
           <a class="" href="{{route('teacher.delete',['id' =>$teacher->id ])}}">
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
