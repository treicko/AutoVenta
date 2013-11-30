


    <h1>PERSONAL DEL SISTEMA</h1>
    <?php echo form_open("venta/validarCliente");?>
    <div class="box">
        <h1>Nueva venta</h1>
        <label>
            <span>ClIENTE</span>
            <select name="respuesta">
                  <option value="registrado">SI</option>
                  <option value="noRegistrado">NO</option>
            </select>

        </label> <br>
        <label>
            <input type="submit" class="button" value="NEXT" />
                   
        </label> <br>

        <!--
    	<label>
        	<span>ID VENTA</span>
        	<input type="text" class="input_text" name="id_venta" autofocus="autofocus" />
        </label><br>
          <label>
            <span>ID CLIENTE</span>
            <input type="text" class="input_text" name="id_cliente" required="required"/>
        </label><br>
        <label>
        	<span>ID VEHICULO</span>
        	<input type="text" class="input_text" name="id_vehiculo" required="required"/>
        </label><br>
        <label>
        	<span>ID VENDEDOR</span>
        	<input type="text" class="input_text" name="id_vendedor" required="required"/>
        </label><br>
        <label>
        	<span>FECHA</span>
        	<input type="date" class="input_text" name="fecha" required="required"/>
        </label><br>
        <label>
        	<input type="reset" class="button" value="Limpiar" />
        	<input type="submit" class="button" value="Guardar" />         
        </label> <br>
    	-->
    </div>
	
</form>