@extends('layouts.layout')
@section('content')   
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Ocupacion</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('ocupacion.create') }}" class="btn btn-info" >Añadir ocupacion</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>ocupacion</th>
             </thead>
             <tbody>
              @if($ocupacions->count())  
              @foreach($ocupacions as $ocupacion)  
              <tr>
                <td>{{$ocupacion->id}}</td>
                <td>{{$ocupacion->ocupacion}}</td>
              
                <td><a class="btn btn-primary btn-xs" href="{{action('OcupacionController@edit', $ocupacion->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>

                <td>
                  <form action="{{action('OcupacionController@destroy', $ocupacion->id)}}" method="post">
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
      {{ $ocupacions->links() }}
    </div>
  </div>
</section>

@endsection