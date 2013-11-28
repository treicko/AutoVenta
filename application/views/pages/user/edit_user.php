<h1>PERSONAL DEL SISTEMA</h1>

<div class="box">
<form action="<?php echo base_url(); ?>index.php/usuarios/modificar_usuario" method="post">        
<h1>Editar Usuarios</h1>
	<input type="hidden" class="input_text" name="id"  value="<?php echo $usuario['id'];?>"/>
	<label>
    	<span>Usuario:</span>
    	<input type="text" class="input_text" name="nombre"  value="<?php echo $usuario['nombre'];?>"/>
    </label>
    <label>
    	<span>CI:</span>
    	<input type="text" class="input_text" name="ci"  value="<?php echo $usuario['ci'];?>"/>
    </label> 
	<label>
    	<span>Telefono:</span>
    	<input type="text" class="input_text" name="telefono" value="<?php echo $usuario['telefono'];?>"/>
    </label> 	                    		
    <label>
    	<span>Celular:</span>
    	<input type="text" class="input_text" name="celular" value="<?php echo $usuario['celular'];?>"/>
    </label> 
    <label>
    	<span>Email:</span>
    	<input type="text" class="input_text" name="email" value="<?php echo $usuario['email'];?>"/>
    </label>    
    <label>
    	<span>Direccion:</span>
    	<input type="text" class="input_text" name="direccion" value="<?php echo $usuario['direccion'];?>"/>
    </label>
    <label><span>Nivel de Acceso:</span>
        <select name="nivelAcceso" class="input_box"> 
        	  <?php if ($usuario['nivelAcceso']=='Administrador'){?>
              <option selected="selected">Administrador</option>
              <option>Almacen</option>
              <option>Vendedor</option>
              <?php }if ($usuario['nivelAcceso']=='Almacen'){?>
              <option>Administrador</option>
              <option selected="selected">Almacen</option>
              <option>Vendedor</option>
              <?php }if ($usuario['nivelAcceso']=='Vendedor'){?>
              <option>Administrador</option>
              <option>Almacen</option>
              <option selected="selected">Vendedor</option>              
              <?php } ?>                                                   
        </select>
    </label>
    <label><span>Estado:</span>
        <select name="estado" class="input_box"> 
        	  <?php if($usuario['estado']=='Activo'){?>
              <option selected="selected">Activo</option>
              <option>Inactivo</option>
              <?php } else {?>
              <option>Activo</option>
              <option selected="selected">Inactivo</option> 
              <?php } ?>                                   
        </select>
    </label>          
    <label>
    	<span>Usuario:</span>
    	<input type="text" class="input_text" name="usuario" value="<?php echo $usuario['usuario'];?>"/>
    </label> 
    <label>
    	<span>Password:</span>
    	<input type="text" class="input_text" name="password" value="<?php echo $usuario['password'];?>" />
    </label>     
    <label>
    	<input type="reset" class="button" value="Limpiar" />
    	<input type="submit" class="button" value="Guardar" />         
    </label> 
</form>
</div>






