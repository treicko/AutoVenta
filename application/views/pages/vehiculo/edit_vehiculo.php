<h1>CLIENTES</h1>

<div class="box">      
<?php #echo validation_errors();?>
<?php #echo form_open('clientes/editar_cliente');?>  
<form action="<?php echo base_url(); ?>index.php/vehiculos/modificar_vehiculo" method="post">        
<h1>Editar Vehiculo</h1>
	<input type="hidden" class="input_text" name="id"  value="<?php echo $vehiculo['Id_vehiculo'];?>"/>
	<label>
    	<span>Cliente:</span>
    	<input type="text" class="input_text" name="placa"  value="<?php echo $vehiculo['placa'];?>"/>
    </label> 
	<label>
    	<span>Telefono:</span>
    	<input type="text" class="input_text" name="marca" value="<?php echo $vehiculo['modelo'];?>"/>
    </label> 	                    		
    <label>
    	<span>Celular:</span>
    	<input type="text" class="input_text" name="modelo" value="<?php echo $vehiculo['marca'];?>"/>
    </label> 
    <label>
    	<span>Email:</span>
    	<input type="text" class="input_text" name="precio" value="<?php echo $vehiculo['precio'];?>"/>
    </label>
    <label>
    	<input type="reset" class="button" value="Limpiar" />
    	<input type="submit" class="button" value="Guardar" />         
    </label> 
</form>
</div>






