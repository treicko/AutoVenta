<h1>PERSONAL DEL SISTEMA</h1>

<p><a class='links' href="<?php echo base_url(); ?>index.php/usuarios/nuevo_usuario"><img src="<?php echo base_url(); ?>images/icono_add.png" width="16" height="16" />Añadir Personal</a></p>    
<table summary='Tabla' border='2'>
<thead>
<tr>
	<th>Personal</th>	
    <th>Ci</th>
    <th>Telefono</th>
    <th>Celular</th>
    <th>Email</th>    
    <th>Direcci&oacute;n</th>	
    <th>Nivel de Acceso</th>
    <th>Usuario</th>
    <th>Contraseña</th>
    <th>Estado</th>			
	<th colspan="2">Acciones</th>
</tr>	
</thead>
<?php foreach($usuarios as $personal_item){?>
<tr>
	<td><?php echo $personal_item['nombre']?></td>	
    <td><?php echo $personal_item['ci']?></td>
    <td><?php echo $personal_item['telefono']?></td>
    <td><?php echo $personal_item['celular']?></td>
	<td><?php echo $personal_item['email']?></td>
    <td><?php echo $personal_item['direccion']?></td>	
    <td><?php echo $personal_item['nivelAcceso']?></td>
    <td><?php echo $personal_item['usuario']?></td>
    <td><?php echo $personal_item['password']?></td>
    <td><?php echo $personal_item['estado']?></td>
	<td> <a href="<?php echo base_url(); ?>index.php/usuarios/editar_usuario/<?php echo $personal_item['id']?>"><img src='<?php echo base_url(); ?>images/icono_edit.png' width='16' height='16' title="Editar"/></a></td>
	<td> <a href="<?php echo base_url(); ?>  .php/usuarios/eliminar_usuario/<?php echo $personal_item['id']?>" onclick="return eliminarVariable('Esta seguro que desea eliminar el registro?')"><img src='<?php echo base_url(); ?>images/icono_remove.png' width='16' height='16' title="Eliminar"/></a></td>	
</tr>
<?php }?>
</table>






