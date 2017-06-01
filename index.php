<html>
<head>
	<title>Parcial 2: Bases de datos</title>
   <!--Import Google Icon Font-->
   <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="indigo darken-4" style="display: flex; min-height: 100vh; flex-direction: column;">

	<!--Importando jQuery y materialize.js-->
   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>

<!-- ----------------------------div para cargar paginas-->   
<main style="flex: 1 0 auto;"><div class="row">
	<br><br><br class='hide-on-med-and-up'><br class='hide-on-med-and-up'>
   	<?php
	   	if(isset ($_GET['pag'])){
	     		if ($_GET['pag']==1) require ("autenticar.php");
		   	elseif ($_GET['pag']==2) require ("asignaturas.php");
		   	elseif ($_GET['pag']==3)require ("eliminar.php");
		   	elseif ($_GET['pag']==4)require ("modificar.php");
		  	}
		   else require ("autenticar.php");
      ?>
</div></main>
<footer class="page-footer blue-grey darken-1">
	<div class="footer-copyright">
   	<div class="container">
      	Junio 2017 Elkyn Enriquez - Jair Arboleda
      </div>
   </div>
</footer>
</body>
</html>
