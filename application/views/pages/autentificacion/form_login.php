<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="forms">Iniciar Sesi&oacute;n</h1>
            </div>
        </div>
    </div>
    <div class="row">
	    <div class="col-lg-5 ">
	        <h1>Siente Tus Pasiones</h1>
	        <p>Veh&iacute;culos que llega tan alto como t&uacute;, No te lleva de un lugar a otro, te pone en otro lado.</p>    
	        <div class = "container">
	            <img src="<?php echo base_url(); ?>images/img5.jpg" alt="" width="250" height="250"  class="img-circle"/>
	            <img src="<?php echo base_url(); ?>images/img6.jpg" alt="" width="250" height="250"  class="img-thumbnail"/>
	        </div>
	    </div>
    

    
        <div class="col-lg-6 col-lg-offset-1" >
            <div class="well"> <!-- me pinta de color el contexto del formulario -->

                <?php echo validation_errors();?>
                <?php $attributes = array('class' => 'bs-example form-horizontal'); ?>
                <?php echo form_open('autentificacion/verify_login', $attributes);?>          
                    <fieldset>
                        <!-- zzzzzzzzzzzzzzzzzzz Datos Basicos zzzzzzzzzzzzzzzzzzzzzzz -->
                        <legend>Autentificarse</legend>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Usuario</label>
                            <div class="col-lg-10">
                            	<div class="input-group">
                                	<input type="text" class="form-control" id="inputNombre" name="user" placeholder="Nombre de Usuario" required="required">
                                	<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" >Contraseña</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="inputpassword" name="password" placeholder="Contraseña" required="required">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-qrcode"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                             <label class="float">
                             	<?php  if(isset($error) && $error){
									echo "Contraseña o Usuario incorrecto";}?>
            					<?php echo validation_errors();?>
            				</label>      
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default" type="reset" >Limpiar</button> 
                                <button type="submit" class="btn btn-primary">Ingresar</button> 
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>


