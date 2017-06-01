<?php
$passwordC="123";
$passwordA="321";
$password1 = strtolower(md5($passwordC.$_POST["numero"]));
$password2 = strtolower(md5($passwordA.$_POST["numero"]));
$usuariopassword = strtolower($_POST["cifrado"]);

session_start();
if ($_POST['usuario']=="colegio" && $password1==$usuariopassword) {
    $_SESSION['Susuario'] = $_POST["usuario"];
    $_SESSION['Spassword'] = $_POST["password"];
    echo "<body bgcolor='161D29' text='ddddff'><center><br><br><h1>Bienvenido</h1><img src='leon.gif'></center></body>
  		  	 <meta http-equiv='refresh' content='5; URL=index.php?pag=1' />";
	$conex=mysqli_connect("localhost",$_POST["usuario"],$_POST["password"],"colegio");
} 
elseif ($_POST['usuario']=="Admincol" && $password2==$usuariopassword) {
    $_SESSION['Susuario'] = $_POST["usuario"];
    $_SESSION['Spassword'] = $_POST["password"];
    echo "<body bgcolor='161D29' text='ddddff'><center><br><br><h1>Bienvenido</h1><img src='leon.gif'></center></body>
    <meta http-equiv='refresh' content='5; URL=index.php?pag=1' />";
	$conex=mysqli_connect("localhost",$_POST["usuario"],$_POST["password"],"colegio");
} 
else echo "<body bgcolor='000000'><br><br><center><img src='error.gif'></center><body>
<meta http-equiv='refresh' content='5;URL=index.php?pag=1' />";
?>
