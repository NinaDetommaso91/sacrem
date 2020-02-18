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
			<script type="text/javascript">
   
     function vehi() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Registrar Datos Economicos</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="post" action="{{ route('datosE.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-13 col-sm-6 col-md-8">

									<table>
										 

										<tr><td align="right"><label for="cedula" >Cedula:</label></td>
										<td ><div><input id="cedula" name="cedula" type="text" class="form-control" cedula="cedula"  required autofocus></td></tr>

 										<tr><td align="right"><label for="ocupacion">Ocupación</label></td>
										<td> <select name=ocupacion id='ocupacion' value={!! Form::select('ocupacion',$ocu)!!}
                                    </select>    <div>  </td></tr>



											<tr><td align="right"><label for="e">Personas Dependientes:</label></td>
										<td><div>  <select name="pdep" id="pdep" >
                      <option value="12">Ninguna</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="4">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">Mas de Diez</option>
                      

                    </select>  </br>
</td></tr>

												

											<tr><td align="right"><label for="e">Ingresos Mensuales</label></td>
										<td><div><input id="ingresom" name="ingresom" type="text" class="form-control"  required autofocus></td></tr>


											<td align="right"><label for="e">Posee Vehiculo</label></td>
										<td><div>Si<input type="checkbox" name="check" id="check"  onchange="javascript:vehi()" />
                                              No<input type="checkbox" value="3" name="vehiculo" id="vehiculo"    /></td>
 
                                              				
															<tr align="center"><td align="center" rowspan="2" colspan="2"><div align="center" id="content" name=vehiculo style="display: none;" ><select id="vehiculo" name="vehiculo" value="{!! Form::select('tipovehiculos',$tv)!!}</select> 
															 </div></td></tr>

											
 										    <tr>
										   </tr>


											<tr><td><label for="e">Estado  del Vehiculo</label></td>
												  <td><select name="condicionesVe" id="condicionesVe" required="autofocus">
					  <option value="1">Operativo</option>
                      <option value="2">Regular</option>
                      <option value="3">inoperativo</option></select></td></tr>
                
											


											<tr><td align="right"><label for="e">Situación de Vivienda</label></td>
										<td><div>  <select name="vivienda" id="vivienda" >
                      
                      <option value="1">Alquilada</option>
                      <option value="2">Propia</option>
                      <option value="3">Prestada</option>
                      <option value="4">Otra</option></select></tr>
											

											<tr><td align="right"><label for="e">Estado de la Vivienda</td>
												<td><div>  <select name="condicionesVi" id="condicionesVi" >
                      
                      <option value="1">Muy Buena</option>
                      <option value="2">Buena</option>
                      <option value="3">Regular</option>
                      <option value="4">Inabitable</option></select>
										

											

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