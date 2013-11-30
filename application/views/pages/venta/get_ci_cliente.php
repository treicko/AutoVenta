<h1>registro con cliente</h1>

    <?php echo form_open("venta/getCliente");?>
    <div class="box">
        
        
        
        <label>
            <span>CI</span>
            <input type="text" class="input_text" name="ci" required="required" AUTOFOCUS/>
        </label>
         <label>
            <span>PLACA AUTOMOVIL</span>
            <input type="text" class="input_text" name="placa" required="required"/>
        </label>
        
        

        <label>
            <input type="reset" class="button" value="RESET">
            <input type="submit" class="button" value="OK" />
                   
        </label> 

    </div>
    
</form>