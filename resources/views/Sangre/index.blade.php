@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista sangre</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('sangre.create') }}" class="btn btn-info" >Añadir sangre</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>sangre</th>
              
             </thead>
             <tbody>
              @if($sangres->count())  
              @foreach($sangres as $sangre)  
              <tr>
                <td>{{$sangre->nombre}}</td>
              
                <td><a class="btn btn-primary btn-xs" href="{{action('SangreController@edit', $sangre->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('SangreController@destroy', $sangre->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
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
      {{ $sangres->links() }}
    </div>
  </div>
</section>

@endsection