<!--<div id="botonera">
	<ul id="menu">
	<li><a href="<?php #echo base_url(); ?>index.php/vehiculos/ver_vehiculos">Vehiculo</a></li> 
      
    <li><a href="#">Clientes</a></li>
    <li><a href="#">Ventas</a></li>
    <li><a href="#">prueba</a></li>
    
	<li><a href="<?php #echo base_url(); ?>index.php/usuarios/logout_user">Cerrar Sesi&oacute;n</a></li>
</ul>
</div>-->

<div id="content">

<div class="navbar navbar-default navbar-fixed-top">

  <div class="container">
    <div class="navbar-header">
      <a href="" class="navbar-brand">AutoVenta</a>
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-main">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Quienes Somos <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/acerca_de/index">Perfil</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/acerca_de/mision">Misi&oacute;n</a></li>
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/acerca_de/vision">Visi&oacute;n</a></li>
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/acerca_de/objetivos">Objetivos</a></li>
          </ul>
        </li>
        <li><a href="">Accesorios</a></li>
        <li><a href="<?php echo base_url()?>index.php/vehiculos/ver_vehiculos">Veh&iacute;culos</a></li>
        <form class="navbar-form navbar-left">
                <input type="text" class="form-control col-lg-8" placeholder="Search">
        </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="" target="">Contactos</a></li> 
	      <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout_user">Cerrar Sesi&oacute;n</a></li>
        <!--target="_blank" -> eso hace que habra otra pagina -->
      </ul>
    </div>
  </div>

</div>
