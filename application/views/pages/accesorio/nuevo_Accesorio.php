<h1>hola desde nuevo accesorio</h1>

 <div class="box">
    <?php echo form_open("accesorio/registrarAccesorio");?>

    <!--<form align="top" class="bs-example form-horizontal" method="get/post"> -->

        
        <LABEL><H2>AGREGAR ACCESORIO</H2></LABEL>
        <input   type="hidden" class="input_text" name="id"  />
        <label>
            <span>NOMBRE</span>
            <input   type="text" class="input_text" name="nombre" required="required"/>
        </label>
        <label>
            <span>CATEGORIA</span>
            <input   type="text" class="input_text" name="categoria" required="required"   />
        </label>
        <label>
            <span>PRECIO</span>
            <input   type="text" class="input_text" name="precio" required="required"   />
        </label>
        <label>
            <span>DESCRIPCION</span>
            <textarea name="descripcion" width="500px" height="500px" placeholder="AQUI la descripcion"></textarea>
           <!-- <input   type="text" class="input_text" name="descripcion" required="required" />
        
-->        </label>
        <label>
            <span>imagen</span>
            <input   type="file" class="input_text" name="imagen"  />
        </label>
       

        

        <label>
            <input type="reset" class="button" value="RESET">
            <input type="submit" class="button" value="GUARDAR " />
                   
        </label> 

  	
</form>
