<div id="content">

<div class="navbar navbar-default navbar-fixed-top">

  <div class="container">
    <div class="navbar-header">
      <a href="" class="navbar-brand">AutoVenta Administrador</a>
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-main">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Vehiculo <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/vehiculos/nuevo_vehiculo">Nuevo Veh&iacute;culo</a></li>
            <li class="divider"></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Vendedor <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/vendedor/index">Nuevo Vendedor</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/acerca_de/mision">Eliminar Vendedor</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Ventas <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/acerca_de/index">Ver Rating De Ventas</a></li>
            <li class="divider"></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Accesorios <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/accesorio/nuevoAccesorio">Nuevo Accesorio</a></li>
            <li class="divider"></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">


        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> <span class="badge"> 3</span></a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"> <span class="glyphicon glyphicon-user"></span> <?php echo $nombre; ?><span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="themes">
            <li><a tabindex="-1" href="<?php echo base_url();?>index.php/acerca_de/index">Editar Perfil</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/autentificacion/logout">Cerrar Sesi&oacute;n</a></li>
          </ul>
        </li>
        <!--target="_blank" -> eso hace que habra otra pagina -->
      </ul>
    </div>
  </div>

</div>
