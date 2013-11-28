<h1>CLIENTES</h1>

<p><a class='links' href="#"><img src="<?php echo base_url(); ?>images/icono_add.png" width="16" height="16" />Añadir Cliente</a></p>    
<table summary='Tabla' border='2'>
<thead>
<tr>
	<th>Cliente</th>	
    <th>Telefono</th>
    <th>Celular</th>
    <th>Email</th>
    <th>Pais</th>	
    <th>Ciudad</th>
    <th>Direcci&oacute;n</th>
    <th>Referencia</th>
    <th>Tel: Referencia</th>	
    <th>Factura</th>
    <th>NIT</th>				
	<th>Editar</th>
	<th>Eliminar</th>
</tr>	
</thead>
<?php foreach($clientes as $cliente_item){?>
<tr>
	<td><?php echo $cliente_item['nombre']?></td>	
    <td><?php echo $cliente_item['telefono']?></td>
    <td><?php echo $cliente_item['celular']?></td>
	<td><?php echo $cliente_item['email']?></td>
    <td><?php echo $cliente_item['pais']?></td>	
    <td><?php echo $cliente_item['ciudad']?></td>
    <td><?php echo $cliente_item['direccion']?></td>
	<td><?php echo $cliente_item['referencia']?></td>
    <td><?php echo $cliente_item['telefonoReferencia']?></td>	
    <td><?php echo $cliente_item['nombreFactura']?></td>
    <td><?php echo $cliente_item['nit']?></td>
	<td> <a href="editar_principal.php?var=<?php echo $cliente_item['id'] ?>"><img src='<?php echo base_url(); ?>images/icono_edit.png' width='16' height='16' /></a></td>
	<td> <a href="javascript:eliminarVariable(<?php echo $cliente_item['id']?>)"><img src='<?php echo base_url(); ?>images/icono_remove.png' width='16' height='16' /></a></td>	
</tr>
<?php }?>
</table>






