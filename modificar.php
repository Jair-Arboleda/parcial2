<form class="row light-blue-text text-accent-3 center-align blue-grey darken-3" id="formBuscar" name="formBuscar" method="post" action="">
	<div class="row">		
		<div class="col s1 hide-on-small-only"></div><div class="col s11"><h3 class="light-blue-text text-darken-2">Buscar estudiante</h3></div>
	</div>
	<input type="hidden" name="pag" value="2">
	<div class="row light-blue-text text-accent-3 center-align">
		<div class="input-field col s12 m4">
          <input id="codigo" type="text" class="validate" name="cod_estudiante">
			<label for="codigo">Código estudiantil</label>
        </div>
   		
   		<div class="col s11 m3">
			<button class="btn-floating right light-blue accent-4 btn-large tooltipped" data-position="left" data-delay="50" data-tooltip="Buscar estudiante" type="submit" name="action">
				<i class="material-icons">search</i></button>
		</div>
		
	</div>
</form>
<br><br>

<div class="row">
	<div class="col s12 center-align"><h3 class="blue-grey-text text-accent-1">Resultado de la búsqueda</h3></div>
</div>
<?php
$sql2=" e.cod_estudiante
from estudiante as e 
where e.cod_docente=e.cod_estudiante";
	$sql2.=$consulta;
	echo "SQL:".$sql2;
	require("conexion.php");
	$r2=mysqli_query($conex,$sql2);
	$resultados=0;
	if($r2!=null) {
		echo "<table class='responsive-table' width=100% border=1px><thead class='light-blue-text text-accent-2'><tr><th>Código Asignatura</th><th>Nombre Asignatura</th><th>Codigo Docente</th><th>Nombre docente</th><th>Sede</th><th>Jornada</th><th>Grado</th></tr></thead><tbody>";
		while ($d=mysqlI_fetch_row($r2)) {
	   	echo "<tr><td>$d[0]</td><td>$d[1]</td><td> $d[2]</td><td>$d[3]</td><td>$d[4]</td><td> $d[5]</td><td> $d[6]</td>";
	   	$resultados++;    
		}
		echo "</tbody></table>";
		echo "<center><h2>Resultados (".$resultados.")</h2></center>";
	}
	else echo "<center><h1>No hay resultados que mostrar (".$resultados.")</h1></center>";
?>
<form class="row light-blue-text text-accent-3 center-align blue-grey darken-3" id="formBuscar" name="formBuscar" method="post" action="">
	<div class="row">		
		<div class="col s1 hide-on-small-only"></div><div class="col s11"><h3 class="light-blue-text text-darken-2">Buscar estudiante</h3></div>
	</div>
	<input type="hidden" name="pag" value="2">
	<div class="row light-blue-text text-accent-3 center-align">
		<div class="input-field col s12 m4">
          <input id="codigo" type="text" class="validate" name="cod_estudiante">
          <label for="codigo">Código estudiantil</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="nombre" type="text" class="validate" name="nombre">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="apellidos" type="text" class="validate" name="apellidos">
          <label for="apellidos">Apellidos</label>
        </div>
   </div>
   <div class="row light-blue-text text-accent-3 center-align">
        <div class="col s6 m3">
		  <br />
		  <label class="" for="fecha_nacimiento">Fecha de nacimiento</label>
          <input id="fecha_nacimiento" type="date" class="datepicker" name="fecha_nacimiento">
		  </div>
        <div class="col s6 m3 center-align">
        	<p>Sexo:</p>
			<p>
				<input name="cod_genero" type="radio" id="femenino" value="F" />
			  	<label for="femenino" class="light-blue-text text-accent-2">Femenino</label>
				<input name="cod_genero" type="radio" id="masculino" value="M" />
			  	<label for="masculino" class="light-blue-text text-accent-2">Masculino</label>
			</p>
			</div>
		<div class="col s11">
			<button class="btn-floating right light-blue accent-4 btn-large tooltipped" data-position="left" data-delay="50" data-tooltip="Buscar estudiante" type="submit" name="action">
				<i class="material-icons">search</i></button>
		</div>
	</div>
</form>
<br><br>
