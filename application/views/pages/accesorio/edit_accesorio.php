<h1>ACCESORIO</h1>

<div class="box">      
<?php #echo validation_errors();?>
<?php #echo form_open('clientes/editar_cliente');?>  
<form action="<?php echo base_url(); ?>index.php/accesorio/actualizarAccesorio" method="post">        
<h1>Editar accesorio</h1>
    <input type="hidden" class="input_text" name="id"  value="<?php echo $accesorio['id'];?>"/>
    <label>
        <span>NOMBRE:</span>
        <input type="text" class="input_text" name="nombre"  value="<?php echo $accesorio['nombre'];?>"/>
    </label> 
    <label>
        <span>CATEGORIA:</span>
        <input type="text" class="input_text" name="categoria" value="<?php echo $accesorio['categoria'];?>"/>
    </label>                                
    <label>
        <span>PRECIO:</span>
        <input type="text" class="input_text" name="precio" value="<?php echo $accesorio['precio'];?>"/>
    </label> 
    <label>
        <span>DESCRIPCION:</span>
        <textarea name="descripcion" value=""><?php echo $accesorio['descripcion'];?></textarea>
        
    </label>
    <label>
        <input type="reset" class="button" value="Limpiar" />
        <input type="submit" class="button" value="UPDATE" />         
    </label> 
</form>
</div>

