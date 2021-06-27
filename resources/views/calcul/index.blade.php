@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<button type="button" class="btn btn-success">  <a class="dropdown-item" href="{{route('calcul.create')}}">اضافة معلومات جديدة <i class="fas fa-fw fa-plus-square"></i></button></a>
          <br><br>
            <div class="card-1">
                <div class="card-header" align="right">احصائيات الاعداد </div>
                <div class="card-body">
               <table class="table table-striped">
               <thead>
              <tr>
          
			 <th scope="col"> st </th>
			 <th scope="col"> gr</th>
			 <th scope="col"> em </th>
			 <th scope="col"> pr </th>
             <th scope="col">Edit</th>
            <th scope="col">Delete</th>
                                    
           </tr>
           </thead>
          <tbody>
           @foreach ($calcul as $calcul)
              <tr>
                                           
                                                 <th scope="row">{{$calcul->st}}</th>
											      <th scope="row">{{$calcul->gr}}</th>
											      <th scope="row">{{$calcul->em}}</th>
											      <th scope="row">{{$calcul->pr}}</th>
											      
                                            
                                            <td> 
                                              <a class="" href="{{route('calcul.edit',['id' =>$calcul->id ])}}">   
                                                        <i class="fas fa-edit"></i>
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="" href="{{route('calcul.delete',['id' =>$calcul->id ])}}">
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
