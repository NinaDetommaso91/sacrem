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
			      		<h3 class="panel-title">Datos Personales</h3>
			         </div>
				  <div class="panel-body">					
				   	<div class="table-container">
						<form method="POST" action="{{ route('datos.store') }}"   >
							{{ csrf_field() }}

Cédula: <input type="text"  name="cedula" id="cedula" placeholder="Cédula" size="8" > </br>

    Posee Pasaporte: <select name="pasaporte" id="pasaporte" >
											<option value="null">Seleccione</option>
											<option value="1">Si</option>
											<option value="2">No</option>
										</select>  </br>

   
    Nombres:<input type="text" name="nombre" id="nombre" size="10" placeholder="Nombres">  </br>


    Apellidos:<input type="text" name="apellido" id="apellido" size="10" placeholder="Apellidos">   </br>

  

    
    Seleccione Sexo:<select name="sexo" id="sexo" >

                      <option value="0"></option>
                      <option value="1">Masculino</option>
                      <option value="2">Femenino</option>

                    </select>  </br>


       
Grupo Sanguineo:{!! Form::select('sangre',$sangres)!!}   </br>
 
     Fecha de Nacimiento:<input type="date" name="fechanac" id="fechanac" ></br>
  

     Pais De Nacimiento:<select name=paisnac id='paisnac'  value={!! Form::select('pais',$paises) !!}</select>    </br>

        Estado Civil: <select  name=estacivil id='estacivil'  value={!! Form::select('estadocivil',$estadocivils) !!}</select></tr> </br>

    Seleccione Nacionalidad:

            @foreach($nacionalidades as $nacionalidad)
            {{ Form::checkbox('nacionalidades_id[]', $nacionalidad->id) }} {{$nacionalidad->nombre}}
            @endforeach
       </br>


   
      Teléfono Celular:   <input type="tel" name="telc" id="telc" size="8" placeholder="Telefono Celular" >    </br>
    
      Teléfono Fijo:  <input type="tel" name="tel" id="tel"  placeholder="Telefono Fijo" size="8"></br> 

       Municipio donde reside actualmente:<select name=municipio id='municipio'  valuee={!! Form::select('municipio',$municipios)!!}</select>   </br>
    
        <input type="textbox"  name="direccion" id="direccion" placeholder="Dirección"> </tr>
  
            
                   <td colspan="4" width="100%"><h4>Datos Bancarios</h4> </tr>

      Banco:<select name=banco id='banco' value={!! Form::select('banco',$bancos) !!}
                                    </select>    </br>
      Número de Cuenta:<input type="numcta" name="numcta" id="numcta" placeholder="Número de Cuenta">   

       <select name="sexo" id="sexo"  >

                      <option value="null">Seleccione Talla de Pantalon</option>
                      <option value="1">Masculino</option>
                      <option value="2">Femenino</option>
                       </select></tr>
       
                        <h4>Datos de Vestuario  </h4>

 Seleccione:<select name="tallac" id="tallac"  >
											<option value="null">Talla de Camisa</option>
											<option value="1">Si</option>
											<option value="2">No</option>
                    <option value="1">Si</option>
                      <option value="2">No</option>
                    <option value="1">Si</option>
                      <option value="2">No</option>
										</select> </br> 

    Seleccione:<select name="tallap" id="tallap"  >

											<option value="null">Talla de Pantalon</option>
											<option value="1">Si</option>
											<option value="2">No</option>

										</select></br>

    Seleccione:<select name="tallaz" id="tallaz"  >
											<option value="null">Talla De Zapato</option>
											<option value="1">Si</option>
											<option value="2">No</option>

										</select></br>



    <h4 rowspan="3">Datos de Contacto de Emergencia </h4>    <!-- Primera celda de la segunda fila -->


    <input type="text" name="nombree" id="nombree"  placeholder="Nombres"></br>    
    <input type="text" name="apellidoe" id="apellidoe"  placeholder="Apellidos"></br>
    <input type="tel" name="tele" id="tele"  placeholder="Telefono Fijo"></br>
    <input type="tel" name="telce" id="telce"  placeholder="Telefono Fijo"> </br>   
						</div>
								
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Siguiente" class="btn btn-success btn-block">
									<a href="{{ route('datos.index') }}" class="btn btn-info btn-block" >Atrás</a>
					       </div>	
          
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

	</section>
	@endsection