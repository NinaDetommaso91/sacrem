@extends('layouts.layout')
@section('content')


<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista estado</h3></div>
          <div class="pull-right">
            <div class="btn-group">
            </div>
            <div class="btn-group">
              <a href="{{ route('estado.create') }}" class="btn btn-info" >Añadir Estado</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Estado</th>
              <th>Pais</th>
             </thead>
             <tbody>
              @if($estados->count())  
              @foreach($estados as $estado)  
              <tr>
                <td>{{$estado->nombre}}</td>
                <td>{{$estado->x}}</td>
                 <td><a class="btn btn-primary btn-xs" href="{{action('EstadoController@edit', $estado->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EstadoController@destroy', $estado->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button> </form>
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
      {{ $estados->links() }}
    </div>
  </div>
</section>

@endsection
