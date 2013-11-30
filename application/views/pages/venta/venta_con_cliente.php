
<h1>registro con cliente</h1>
     <div class="box">
    <?php echo form_open("venta/registrarVenta");?>

    <!--<form align="top" class="bs-example form-horizontal" method="get/post"> -->

        
        <LABEL><H2>CLIENTE</H2></LABEL>
        <input   type="hidden" class="input_text" name="id"  value="<?php echo $cliente['id'];?>"/>
        <label>
            <span>NOMBREs</span>
            <input  readonly="readonly"  type="text" class="input_text" name="cliente_nombres" required="required" value="<?php echo $cliente['nombre'];?>"  />
        </label>
        <!--
        <label>
            <span>APELLIDOs</span>
            <input  disabled=true type="text" class="input_text" name="cliente_apellidos" value="<?php //echo $cliente['apellidos'];?>"required="required"/>
        </label>
        -->
        <label>
            <span>CI</span>
            <input  disabled=true type="text" class="input_text" name="cliente_ci" value="<?php echo $cliente['ci'];?>"  required="required" />
        </label>
        <label>
            <span>DIRECCION</span>
            <input  disabled=true type="text" class="input_text" name="direccion" value="<?php echo $cliente['direccion'];?>" required="required"/>
        </label>
        
        <label>
            <span>TELEFONO/CELULAR</span>
            <input  disabled=true type="text" class="input_text" name="telefono" value="<?php echo $cliente['telefono'];?>"/>
        </label>
        
        <LABEL><H2>VENDEDOR</H2></LABEL>
        

        <label>
            <span>NOMBRE</span>
            <input   disabled=true type="text" class="input_text" name="usuario_nombres" value="<?php echo $nombre; ?>" required="required" />
        </label>
        <label>
            <span>CI</span>
            <input   disabled=true type="text" class="input_text" name="usuario_ci" value="<?php echo $vendedor['ci']; ?>" required="required"/>
        </label>

        <label><h2>VEHICULO</h2></label>
        

        <label>
            <span>PLACA</span>
            <input   disabled=true type="text" class="input_text" name="placa" value="<?php echo $auto['placa'];?>"required="required"/>
        </label>
        <label>
            <span>MARCA</span>
            <input   disabled=true type="text" class="input_text" name="marca" value="<?php echo $auto['marca'];?>" required="required"/>
        </label>
        <label>
            <span>MODELO</span>
            <input disabled=true type="text" class="input_text" name="modelo" value="<?php echo $auto['modelo'];?>" required="required"/>
        </label>
        <label>
            <span>PRECIO</span>
            <input disabled=true type="text" class="input_text" name="precio" value="<?php echo $auto['precio'];?>" required="required"/>
        </label>

        <label>
            <span>FECHA</span>
            <input type="date" class="input_text" name="fecha" required="required"/>
        </label>


        

        <label>
            <input type="reset" class="button" value="RESET">
            <input type="submit" class="button" value="GUARDAR VENTA" />
                   
        </label> 

  	
</form>
