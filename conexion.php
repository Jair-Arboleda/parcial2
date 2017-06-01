<?php
session_start();
if (($_POST['usuario']=="colegio") && ($_POST['password']=="123")) {
    $_SESSION['Susuario'] = $_POST["usuario"];
    $_SESSION['Spassword'] = $_POST["password"];
    echo "Bienvenido <meta http-equiv='refresh' content='5; URL=indx.php' />";
	$conex=mysqli_connect("localhost",$_POST["usuario"],$_POST["password"],"colegio");
} 
elseif ($_POST['usuario']=="Admincol" && $_POST['password']=="321") {
    $_SESSION['Susuario'] = $_POST["usuario"];
    $_SESSION['Spassword'] = $_POST["password"];
    echo "Bienvenido <meta http-equiv='refresh' content='5; URL=lisr.php' />";
	$conex=mysqli_connect("localhost",$_POST["usuario"],$_POST["password"],"colegio");
} 
else echo "Usuario no válido <meta http-equiv='refresh' content='5;URL=autenticar.php' />";
?>