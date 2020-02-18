@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Model_has_roles</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Asignacion.create') }}" class="btn btn-info" >Añadir asignacion</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Model_has_roles</th>
              
             </thead>
             <tbody>
         @if($users->count())  
              @foreach($users as $user)  
              <tr>
                <td>{{$user->email}}</td> 
                 <td>{{$user->x}}</td>  
                 <td>{{$user->name}}</td> 
                 <td>{{$user->id}}</td> 
                 <td>{{$user->model_id}}</td> 


                  <td><a class="btn btn-primary btn-xs" href="{{action('Model_has_rolesController@edit', $user->model_id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                 
                <td> 
                  <form  action="{{action('Model_has_rolesController@destroy', $user->model_id)}}" method="post" class="btn btn-primary btn-xs" >
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button></form>
                 </td>
             
               </tr>
                 @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
               </tr>
                           @endif

              
            </tbody>

          </table>
        </div>
      </div>
       {{ $users->links() }}
    </div>
  </div>
</section>

@endsection