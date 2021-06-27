@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<button type="button" class="btn btn-success">   <a class="dropdown-item" href="{{route('mange.create')}}">اضافة معلومات جديدة <i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
            <div class="card">
                <div class="card-header">الاقسام الاداريه</div>
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
           @foreach ($manges as $mange)
               <tr>
              <th scope="row">{{$mange->name}}</th>
           <td> 
           <a class="" href="{{route('mange.edit',['id' =>$mange->id ])}}">
           <i class="fas fa-edit"></i>
           </a>
           </td>
           <td> 
           <a class="" href="{{route('mange.delete',['id' =>$mange->id ])}}">
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
