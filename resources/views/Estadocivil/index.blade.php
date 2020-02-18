@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista estadocivil</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('estadocivil.create') }}" class="btn btn-info" >Añadir estadocivil</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>estadocivil</th>
              
             </thead>
             <tbody>
              @if($estadocivils->count())  
              @foreach($estadocivils as $estadocivil)  
              <tr>
                <td>{{$estadocivil->nombre}}</td>
              
                <td><a class="btn btn-primary btn-xs" href="{{action('EstadocivilController@edit', $estadocivil->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EstadocivilController@destroy', $estadocivil->id)}}" method="post">
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
      {{ $estadocivils->links() }}
    </div>
  </div>
</section>

@endsection