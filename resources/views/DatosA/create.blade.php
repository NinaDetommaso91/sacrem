@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Registrar Datos Academicos</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="post" action="{{ route('datosA.store') }}" role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-13 col-sm-6 col-md-8">

									<table>
										 

										<tr><td align="right"><label for="cedula" >Cedula:</label></td>
										<td ><div><input id="cedula" name="cedula" type="text" class="form-control" cedula="cedula"  required autofocus></td></tr>

 										<tr><td align="right"><label for="ocupacion">Nivel De Instrucción:</label></td>
										<td> <select name=nivel id='nivel' value={!! Form::select('nivel',$Nivelint)!!}
                                    </select>    <div>  </td></tr>



										 
												 

											<tr><td align="right"><label for="e">Especialidad</label></td>
										
										<td> <select name=especialidad id='especialidad' value={!! Form::select('especialidad',$espec)!!}
                                    </select>    <div>  </td></tr>

											<tr><td align="right"><label for="e">Idiomas:</label></td>
												  <td>   @foreach($idiomas as $idioma)
            {{ Form::checkbox('idiomas_id[]', $idioma->id) }} {{$idioma->idioma}}
            @endforeach</td></tr>


            					<tr><td align="right"><label for="Cursos/Talleres Realizados" >Cursos/Talleres Realizados:</label></td>
										<td ><div><textarea id="Curtal" name="Curtal" type="text" class="form-control" cedula="cedula"  required autofocus></textarea></td></tr>

								<tr><td align="right"><label for="Cursos/Talleres Realizados" >Hablidades:</label></td>
										<td ><div><textarea id="habilidades" name="habilidades" type="text" class="form-control" cedula="cedula"  required autofocus></textarea></td></tr>			
                
											

											

											

                                	</table>
                        
                            </div>
								</div>
								
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a  class="btn btn-info btn-block" >Atrás</a>
								</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection