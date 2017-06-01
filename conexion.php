<?php
session_start();
if (($_POST['usuario']=="colegio") && ($_POST['password']=="123")) {
    $_SESSION['Susuario'] = $_POST["usuario"];
    $_SESSION['Spassword'] = $_POST["password"];
    echo "<body bgcolor='161D29' text='ddddff'><center><br><br><h1>Bienvenido</h1><img src='leon.gif'></center></body>
  		  	 <meta http-equiv='refresh' content='5; URL=index.php?pag=1' />";
	$conex=mysqli_connect("localhost",$_POST["usuario"],$_POST["password"],"colegio");
} 
elseif ($_POST['usuario']=="Admincol" && $_POST['password']=="321") {
    $_SESSION['Susuario'] = $_POST["usuario"];
    $_SESSION['Spassword'] = $_POST["password"];
    echo "<body bgcolor='161D29' text='ddddff'><center><br><br><h1>Bienvenido</h1><img src='leon.gif'></center></body>
    <meta http-equiv='refresh' content='5; URL=index.php?pag=1' />";
	$conex=mysqli_connect("localhost",$_POST["usuario"],$_POST["password"],"colegio");
} 
else echo "<body bgcolor='000000'><br><br><center><img src='error.gif'></center><body>
<meta http-equiv='refresh' content='5;URL=index.php?pag=1' />";
?>
