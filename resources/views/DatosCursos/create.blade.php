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

			<script type="text/javascript">
   
     function ung() {
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

		                                             <script type="text/javascript">
                                                      	$(".myForm").hide();
							                            	function showhideElement(){
							                            	

							                            		Let text="";
																		if ($("#myButton").text() === "show form") {
																			$(".myForm").show():
																			tex = "Hide form";
																		}else{
																			$(".myForm").hide();
																			tex = "Show form";
																		}
																		 $("#myButton").html(text);
									                            	}
									                            </script>






			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Registrar Datos Institucionales</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="post"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-13 col-sm-6 col-md-8">

							<table>		

										<tr>
											<td align="right"><label for="cedula" >Cedula:</label></td>

										   <td><div><input id="cedula" name="cedula" type="text" class="form-control" cedula="cedula"  required autofocus></td>

										 </tr>


								<table border="2">
									<tr>
										<td>
											Curso
										</td>
										<td>
											Lugar
										</td>
										<td>
											Fecha de Realizacion
										</td> 
										<td>
											Estatus
										</td>
									</tr>
									
									<tr>
										<td>
										{!! Form::select('curso',$Curs)!!} 
										</td>

										<td>
											<input type="text" name="FechaRea" id="FechaReali">
										</td>	
										<td>
											<input type="date" name="lugar" id="lugar">
										</td>
										<td>
											<select name="status" id="status">
											<option value=10></option>
											<option value=1>Activo</option>
											<option value=1>Inactivo</option></select>
										</td>
										<td>
										           
<button id="myButton" onclick="showHideElement">Show form</button>
										</td>
											</tr>
									



										 
										<div  class="myForm">	<tr>
										<td>
										{!! Form::select('curso',$Curs)!!} 
										</td>

										<td>
											<input type="text" name="FechaRea" id="FechaReali">
										</td>	
										<td>
											<input type="date" name="lugar" id="lugar">
										</td>
										<td>
											<select name="status" id="status">
											<option value=10></option>
											<option value=1>Activo</option>
											<option value=1>Inactivo</option></select>
										</td>
										<td>
										           

										</td>
											</tr></div>	
<button id="myButton" onclick="showhideElement()">Show form</button>



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