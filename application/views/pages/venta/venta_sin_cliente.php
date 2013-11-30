<h1>registro sin cliente</h1>
	<?php echo form_open("venta/registrarVenta");?>
    <div class="box">
        <h1>Nueva venta</h1>
        
        <LABEL><H2>CLIENTE</H2></LABEL>
        <label>
        	<span>NOMBREs</span>
        	<input type="text" class="input_text" name="cliente_nombres" required="required" autofocus="autofocus"/>
        </label>
        <label>
        	<span>APELLIDOs</span>
        	<input type="text" class="input_text" name="cliente_apellidos" required="required"/>
        </label>
        <label>
        	<span>CI</span>
        	<input type="text" class="input_text" name="cliente_ci" required="required"/>
        </label>
        <label>
            <span>DIRECCION</span>
            <input type="text" class="input_text" name="direccion" required="required"/>
        </label>
        
        <label>
            <span>TELEFONO/CELULAR</span>
            <input type="text" class="input_text" name="telefono" required="required"/>
        </label>
        
        <LABEL><H2>VENDEDOR</H2></LABEL>
        

        <label>
            <span>NOMBRE</span>
            <input type="text" class="input_text" name="usuario_nombres" required="required"/>
        </label>
        <label>
            <span>CI</span>
            <input type="text" class="input_text" name="usuario_ci" required="required"/>
        </label>

        <label><h2>VEHICULO</h2></label>
        

        <label>
            <span>PLACA</span>
            <input type="text" class="input_text" name="placa" required="required"/>
        </label>
        <label>
            <span>MARCA</span>
            <input type="text" class="input_text" name="marca" required="required"/>
        </label>
        <label>
            <span>MODELO</span>
            <input type="text" class="input_text" name="modelo" required="required"/>
        </label>
        <label>
            <span>PRECIO</span>
            <input type="text" class="input_text" name="precio" required="required"/>
        </label>

        <label>
            <span>FECHA</span>
            <input type="date" class="input_text" name="fecha" required="required"/>
        </label>


        

        <label>
            <input type="reset" class="button" value="RESET">
            <input type="submit" class="button" value="GUARDAR VENTA" />
                   
        </label> 

    </div>
	
</form>