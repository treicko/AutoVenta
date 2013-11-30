<h1>registro Sin cliente</h1>

    <?php echo form_open("venta/getPlacaVehiculo");?>
    <div class="box">
        
        
         <label>
            <span>PLACA AUTOMOVIL</span>
            <input type="text" class="input_text" name="placa" required="required" AUTOFOCUS/>
        </label>
        
        

        <label>
            <input type="reset" class="button" value="RESET">
            <input type="submit" class="button" value="OK" />
                   
        </label> 

    </div>
	
</form>