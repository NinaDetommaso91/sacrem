@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administrador</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
  

                    Administrador
                </div>

                <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a>

                <div>

                    <ul>
                        <li class="titulo"><a href="">Categoria #1</a></li>
                        <li><a href="">Categoria #2</a></li>
                        <li><a href="">Categoria #3</a></li>
                        <li><a href="">Categoria #4</a></li>
                        <li><a href="">Categoria #5</a></li>
                    </ul>

                    <ul>
                        <li class="titulo azul"><a href="">Categoria #1</a></li>
                        <li><a href="">Categoria #2</a></li>
                        <li><a href="">Categoria #3</a></li>
                        <li><a href="">Categoria #4</a></li>
                        <li><a href="">Categoria #5</a></li>
                    </ul>

                    <ul>
                        <li class="titulo verde"><a href="">Categoria #1</a></li>
                        <li><a href="">Categoria #2</a></li>
                        <li><a href="">Categoria #3</a></li>
                        <li><a href="">Categoria #4</a></li>
                        <li><a href="">Categoria #5</a></li>
                    </ul>

                    <ul>
                        <li class="titulo rojo"><a href="">Categoria #1</a></li>
                        <li><a href="">Categoria #2</a></li>
                        <li><a href="">Categoria #3</a></li>
                        <li><a href="">Categoria #4</a></li>
                        <li><a href="">Categoria #5</a></li>
                    </ul>

                    <ul>
                        <li class="titulo naranja"><a href="">Categoria #1</a></li>
                        <li><a href="">Categoria #2</a></li>
                        <li><a href="">Categoria #3</a></li>
                        <li><a href="">Categoria #4</a></li>
                        <li><a href="">Categoria #5</a></li>
                    </ul>
                </div>

                </li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
            </div>
        </div>
@if($ids->count())  
              @foreach($ids as $id)  
              <tr>
                <td>{{$id->id}}</td>

    </div>
</div>
@endsection
