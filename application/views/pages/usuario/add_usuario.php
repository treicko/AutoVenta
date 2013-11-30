<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="forms">Nuevo Usuario</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="well">

                <?php echo validation_errors();?>
                <?php $attributes = array('class' => 'bs-example form-horizontal'); ?>
                <?php echo form_open('usuarios/nuevo_usuario', $attributes);?>          
                    <fieldset>
                        <!-- zzzzzzzzzzzzzzzzzzz Datos Basicos zzzzzzzzzzzzzzzzzzzzzzz -->
                        <legend>Datos B&aacute;sicos</legend>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Nombre y Apellidos" required="required">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-pencil"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Ci</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputCi" name="ci" placeholder="C&eacute;dula de identidad" required="required">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-barcode"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tel&eacute;fono</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputTelefono" name="telefono" placeholder="Tel&eacute;fono">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-phone-alt"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Celular</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputCelular" name="celular" placeholder="Celular">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-phone"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" >
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-envelope"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Direcci&oacute;n</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputDireccion" name="direccion" placeholder="Direcci&oacute;n">                                    
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-globe"></span> </span>
                                </div>
                            </div>
                        </div>

                        <!-- zzzzzzzzzzzzzzzzzzz Datos usuario zzzzzzzzzzzzzzzzzzzzzzz -->
                        <legend>Datos De Usuario</legend>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Usuario</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputUsuaio" name="usuario" placeholder="Nombre de Usuario" required="required">                                    
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Contraseña</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="inputContrasenia" name="contrasenia" placeholder="Contraseña" required="required">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-qrcode"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" >Confirmar Contraseña</label>
                            <div class="col-lg-10">
                                <div class="input-group">                                    
                                    <input type="password" class="form-control" id="inputConfirmarContrasenia" name="confirmarContrasenia" placeholder="Confirmar Contraseña" required="required">
                                    <span class="input-group-addon"> <span class="glyphicon glyphicon-qrcode"></span> </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>
                                <?php if(isset($errores)){
                                    echo "Las contraseñas no son iguales";                  
                                 }
                                 ?>
                                <?php echo validation_errors();?>
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default" type="reset" >Limpiar</button> 
                                <button type="submit" class="btn btn-primary">Registrar</button> 
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
              
        <div class="col-lg-5 col-lg-offset-1">

            <h1>Servicio Personalizado</h1>
            <p>Las mejore marcas, los mejores precios, ultimos modelos, accesorios para todo tipo de veh&iacute;culos, y la mas amplia gama de veh&iacute;culos para todo tipo de clientes.</p>    
            <div class = "container">
                <img src="<?php echo base_url(); ?>images/img1.jpg" alt="" width="250" height="270"  class="img-thumbnail"/>
                <img src="<?php echo base_url(); ?>images/img2.jpg" alt="" width="250" height="270"  class="img-circle"/>
            </div>
            <div class = "container">  
                <img src="<?php echo base_url(); ?>images/img4.jpg" alt="" width="250" height="270"  class="img-circle"/>
                <img src="<?php echo base_url(); ?>images/img3.jpg" alt="" width="250" height="270"  />
            </div>
        </div>
                

    </div>


</div>



