<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Auto Venta</title>    
	<link href="<?php echo base_url(); ?>css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/style_login.css" rel="stylesheet" type="text/css" />	
</head>
<body>
<div id="logo">
<!-- Log de la empresa-->
<img src="<?php echo base_url(); ?>images/logo.png" alt="" width="300"  />
</div> 
<h1>Ingreso Administrador Web</h1>
    <br />
	
	<?php echo form_open('usuarios/verify_login');?>   
		<fieldset>
            <label class="float">Usuario:</label>
			<input class="inp-text" name="user" type="text" autofocus/>
			<label class="float">Contraseña:</label>
			<input class="inp-text" name="password"  type="password" />
            <label class="float"><?php  if(isset($error) && $error){
			echo "Contraseña o Usuario incorrecto";}?>
            <?php echo validation_errors();?></label>                
		</fieldset>
		<input class="boton" name="Login" type="submit"  value="Login" />
	</form>
</body>
</html>