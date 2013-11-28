<h1>PERSONAL DEL SISTEMA</h1>

<div class="box">      
<?php echo form_open('usuarios/nuevo_usuario');?>          
<h1>Nuevo Usuario</h1>
	<label>
    	<span>Usuario:</span>
    	<input type="text" class="input_text" name="nombre" />
    </label>
    <label>
    	<span>Ci:</span>
    	<input type="text" class="input_text" name="ci" />
    </label> 
	<label>
    	<span>Telefono:</span>
    	<input type="text" class="input_text" name="telefono" />
    </label> 	                    		
    <label>
    	<span>Celular:</span>
    	<input type="text" class="input_text" name="celular" />
    </label> 
    <label>
    	<span>Email:</span>
    	<input type="text" class="input_text" name="email" />
    </label>
    <label>
    	<span>Direccion:</span>
    	<input type="text" class="input_text" name="direccion" />
    </label>
    <label><span>Nivel de Acceso:</span>
        <select name="nivelAcceso" class="input_box"> 
              <option>Administrador</option>
              <option>Almacen</option>
              <option>Vendedor</option>            
        </select>
    </label>
    <label>
    	<span>Usuario:</span>
    	<input type="text" class="input_text" name="usuario" />
    </label>
    <label>
    	<span>Contraseña:</span>
    	<input type="password" class="input_text" name="password" />
    </label> 
	<label>
    	<span>Confirmar Contraseña:</span>
    	<input type="password" class="input_text" name="confirmPassword" />
    </label>
    <label><?php if(isset($errores)){
					echo "Las contraseñas no son iguales";					
				 }
				 ?>
    	<?php echo validation_errors();?>
    </label>
    <label>
    	<input type="reset" class="button" value="Limpiar" />
    	<input type="submit" class="button" value="Guardar" />         
    </label> 
</form>
</div>






