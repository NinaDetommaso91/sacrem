@extends('layouts.app')

<!DOCTYPE html>
<html lang="es">
<head>



		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

</head>
  <body>


  					<div class="panel-body">
												



                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }}   <span class="caret"></span>
                                </a>
 





                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>  



											<div class="panel-body">
												<div align="center">
												<ul class="nav nav-tabs">
											  
											       <li class="nav-item dropdown">
											    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Maestros</a>
											    <div class="dropdown-menu"> 
										  <a class="dropdown-item" href="./banco">Banco</a></br>
										  <a class="dropdown-item" href="./diocesis">Diocesis</a></br>

										  <a class="dropdown-item" href="./estado">Estado</a></br>
							   		      <a class="dropdown-item" href="./estadocivil">Estado Civil</a></br>
									      <a class="dropdown-item" href="./municipio">Municipio</a></br>
									      <a class="dropdown-item" href="./nacionalidad">Nacionalidad</a></br>
									      <a class="dropdown-item" href="./ocupacion">Ocupacion</a></br>
							   		      <a class="dropdown-item" href="./pais">Pais</a></br>
									      <a class="dropdown-item" href="./sangre">Sangre</a>
											      <div class="dropdown-divider"></div>
											      <a class="dropdown-item" href="#">Separated link</a>
											    </div>
											  </li>
											

											  <li class="nav-item dropdown">
											    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Movimientos</a>
											    <div class="dropdown-menu">
											      <a class="dropdown-item" href="./datos">Datos Personales</a></br>
											      <a class="dropdown-item" href="./datosm">Datos Misionales</a></br>
											      <a class="dropdown-item" href="./datosI">Datos Institucionales</a></br>
											      <a class="dropdown-item" href="./">Datos Médicos</a></br>
											       <a class="dropdown-item" href="./">Datos Económicos</a></br>
											      <div class="dropdown-divider"></div>
											      <a class="dropdown-item" href="#">Separated link</a>
											    </div>
											  </li>

											   <li class="nav-item dropdown">
											    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
											    <div class="dropdown-menu">
											      <a class="dropdown-item" href="#">Action</a>
											      <a class="dropdown-item" href="#">Another action</a>
											      <a class="dropdown-item" href="#">Something else here</a>
											      <div class="dropdown-divider"></div>
											      <a class="dropdown-item" href="#">Separated link</a>
											    </div>
											  </li>
											  <li class="nav-item dropdown">
											    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento</a>
											    <div class="dropdown-menu">
											      <a class="dropdown-item" href="#">Action</a>
											      <a class="dropdown-item" href="#">Another action</a>
											      <a class="dropdown-item" href="#">Something else here</a>
											      <div class="dropdown-divider"></div>
											      <a class="dropdown-item" href="#">Separated link</a>
											    </div>
											  </li>
											   <li class="nav-item dropdown">
											    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ayuda</a>
								 			    <div class="dropdown-menu">
											      <a class="dropdown-item" href="#">Action</a>
											      <a class="dropdown-item" href="#">Another action</a>
											      <a class="dropdown-item" href="#">Something else here</a>
											      <div class="dropdown-divider"></div>
											      <a class="dropdown-item" href="#">Separated link</a>
											    </div>
											  </li>
											</ul> 
										</div>
										</div>
	<div class="container-fluid" style="margin-top: 100px">


		@yield('content')
	</div>

	<style type="text/css">
	.table {
		border-top: 2px solid #ccc;

	}
</style>
@yield('scripts')
</body>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</html>