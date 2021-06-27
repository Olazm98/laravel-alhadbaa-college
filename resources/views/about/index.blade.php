@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Abouts</div>

                <div class="card-body">
 
 
                                    @if ($abouts->count()>0)
                                        
                                    
                        <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"> No </th>
                                    <th scope="col"> Title </th>
                                    
                                <th scope="col">Edit</th>
                                    {{--      <th scope="col">Delete</th>  --}}
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouts as $about)
                                    <tr>
                                            <th scope="row">
                                      <img src="{{$about->featrued}}" alt="{{$about->title}}" class="img-thumbnail" width="100px" height="100px">
                                                
                                            </th>
                                            <th scope="row">{{$about->title}}</th>
                                            
                                            <td> 
                                              <a class="" href="{{route('about.edit',['id' =>$about->id ])}}">   
                                                        <i class="fas fa-edit"></i>
                                                   </a>  
                                            </td>
                                            <td> 
                                            <a class="" href="{{route('about.delete',['id' =>$about->id ])}}">
                                                    <i class="far fa-trash-alt"></i>
                                            </a>
                                           </td> 
                                          </tr>
                                    @endforeach
                                 
                                    @else
                                    <p scope="row" class="text-center">No  abouts</p>  
                                    @endif
                                </tbody>
                              </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
