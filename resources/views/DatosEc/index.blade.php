@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista banco</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('datosE.create') }}" class="btn btn-info" >Añadir banco</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>banco</th>
              
             </thead>
             <tbody>
            
              
    </div>
  </div>
</section>

@endsection