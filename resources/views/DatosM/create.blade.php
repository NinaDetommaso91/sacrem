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
					<h3 class="panel-title">Registrar Datos Misionales</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="post" action="{{ route('datosm.store') }}" role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-13 col-sm-6 col-md-8">

									<table>
										 

										<tr><td align="right"><label for="cedula" >Cedula:</label></td>
										<td ><div><input id="cedula" name="cedula" type="text" class="form-control" cedula="cedula"  required autofocus></td></tr>

 										<tr><td align="right"><label for="ocupacion">Diocesis:</label></td>
										<td> <select name=nombre id='nombre' value={!! Form::select('diocesi',$dioce)!!}
                                    </select>    <div>  </td></tr>



										 
												

											<tr><td align="right"><label for="e">Tipo de Mision</label></td>
										<td>
											<select name="mision" id="mision" required="autofocus">
	                  <option value="1">Rama De enseñanza</option>
                      <option value="2">Juventudes y Asoprovida</option>
                      <option value="3">Damas</option>
                      <option value="4">Otra</option></select>
										</td></tr>


											


											<tr><td align="right"><label for="e">Cargo  que ocupa:</label></td>
												  <td>   @foreach($cargos as $cargo)
            {{ Form::checkbox('cargo_id[]', $cargo->id) }} {{$cargo->cargo}}
            @endforeach</td></tr>
                
											

											<tr><td align="right"><label for="e">Historial Misional:</label></td>
										
                      
                      <td><textarea name="HistorialMisional" id="HistorialMisional"></textarea></td></tr>

											<tr><td align="right"><label for="e">Observaciones Misional:</label></td>
										
                      
                      <td><textarea name="observaciones" id="observaciones"></textarea></td></tr>
											

											<tr><td align="right"><label for="e">Fecha en la que fue asignado a la actual Misión:</td>
												<td><input type="date" name="FechaAsig" id="FechaAsig"></td>
										

											

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