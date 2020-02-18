@extends('layouts.layout')
@section('content')   
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista municipio</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('municipio.create') }}" class="btn btn-info" >Añadir municipio</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>municipio</th>
              
             </thead>
             <tbody>
              @if($municipios->count())  
              @foreach($municipios as $municipio)  
              <tr>
                <td>{{$municipio->x}}</td>
                <td>{{$municipio->nombre}}</td>
              
                <td><a class="btn btn-primary btn-xs" href="{{action('MunicipioController@edit', $municipio->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>

                <td>
                  <form action="{{action('MunicipioController@destroy', $municipio->id)}}" method="post">
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
      {{ $municipios->links() }}
    </div>
  </div>
</section>

@endsection