<script language="JavaScript" src="js/md5.js"></script>
<script language="JavaScript">
numero = Math.random().toString();
function calculaMD5() {
var pw = document.forms["login"].elements["password"].value
pw += numero
return hex_md5(pw)
}
function enviaMD5(hash) {
document.forms["login"].elements["cifrado"].value = hash;
document.forms["login"].elements["numero"].value = numero;
document.forms["login"].submit();
}
</script>
<div class="container">
  <div class="row">
  	<div class="col s1 m4 l4"> </div>
	  	<div class="col s10 m4 l4">
			<img class="responsive-img" src="login.png">
		</div>
	</div>
  <div class="row">
  	<div class="col s12 m3 l4"> </div>
    <form name="login" class="col s12 m6 l4 indigo darken-3" action="conexion.php" method="post" enctype="multipart/form-data">
    	<input type="Hidden" name="cifrado" value="">
		<input type="Hidden" name="numero" value=""> 
      <div class="row"><br />
        <div class="input-field col s12">
          <input id="usuario" name="usuario" type="text" class="validate">
          <label for="usuario">Nombre de usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
      </div>
      <div class="row"><div class="col s11">
      <button class="btn-floating btn-large waves-effect waves-light green right" type="submit" name="action" onClick="enviaMD5(calculaMD5())">
	   	<i class="material-icons">done</i>
  		</button>
  		</div></div>
    </form>
  </div>
</div>
