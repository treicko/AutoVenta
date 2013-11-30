<div class="bs-docs-section">    

    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="forms">Nuevo Usuario</h1>
                <!-- inicio de iconos  -->
                <h1 class="glyphicon glyphicon-cutlery">restaurante</h1>
                <h1 class="glyphicon glyphicon-tree-deciduous">dennis example</h1>
                <h1 class="glyphicon glyphicon-download-alt">Descargar</h1>
                <!-- fin de los iconos  -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="well">

                <!-- zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz  -->

                <?php echo validation_errors();?>
                <?php $attributes = array('class' => 'bs-example form-horizontal'); ?>
                <?php echo form_open('vehiculos/nuevo_vehiculo', $attributes);?>          
                    <fieldset>
                        <legend>Usuario</legend>

                        <!-- zzzzzzzzzzz Dato basicos arriba zzzzzzzzzzzzzzzzz -->

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPlaca" name="placa" placeholder="Placa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Ci</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPlaca" name="placa" placeholder="Placa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Telefono</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPlaca" name="placa" placeholder="Placa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Celular</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPlaca" name="placa" placeholder="Placa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPlaca" name="placa" placeholder="Placa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Direccion</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPlaca" name="placa" placeholder="Placa">
                            </div>
                        </div>

                        <!-- zzzzzzzzzzzzzzzzzzz Datos usuario zzzzzzzzzzzzzzzzzzzzzzz -->

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Placa</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPlaca" name="placa" placeholder="Placa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Modelo</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputModel" name="modelo" placeholder="Model">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" >Marca</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><img src='<?php echo base_url(); ?>images/icono_edit.png' width='16' height='16' title="marca"/></span>
                                    <input type="text" class="form-control" id="inputMarca" name="marca" placeholder="Marca">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Precio</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" id="inputPrecio" name="precio" placeholder="Precio en D&oacute;lares">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="select" class="col-lg-2 control-label">Tipo de Usuario</label>
                          <div class="col-lg-10">
                             <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <i class="icon-search"><span class="glyphicon glyphicon-search"> search </span></i>

                                    <select class="form-control" id="select">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                             </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default" type="reset" >Limpiar</button> 
                                <button type="submit" class="btn btn-primary">Guardar</button> 
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz  -->

                <h1>Registrar Usurio</h1>

                <div class="box">      
                <?php echo form_open('usuarios/nuevo_usuario');?>          
                <h1>Nuevo Usuario</h1>
                    <label>
                        <span>Usuario:</span>
                        <input type="text" class="input_text" name="nombre" />
                    </label>
                    <label>
                        <span>Ci:</span>
                        <input type="text" class="input_text" name="ci" />
                    </label> 
                    <label>
                        <span>Telefono:</span>
                        <input type="text" class="input_text" name="telefono" />
                    </label>                                
                    <label>
                        <span>Celular:</span>
                        <input type="text" class="input_text" name="celular" />
                    </label> 
                    <label>
                        <span>Email:</span>
                        <input type="text" class="input_text" name="email" />
                    </label>
                    <label>
                        <span>Direccion:</span>
                        <input type="text" class="input_text" name="direccion" />
                    </label>

                     <!-- zzzzzzzzzzzzzzzzzzz Datos usuario zzzzzzzzzzzzzzzzzzzzzzz -->

                    <label><span>Nivel de Acceso:</span>
                        <select name="nivelAcceso" class="input_box"> 
                              <option>Administrador</option>
                              <option>Almacen</option>
                              <option>Vendedor</option>            
                        </select>
                    </label>
                    <label>
                        <span>Usuario:</span>
                        <input type="text" class="input_text" name="usuario" />
                    </label>
                    <label>
                        <span>Contraseña:</span>
                        <input type="password" class="input_text" name="password" />
                    </label> 
                    <label>
                        <span>Confirmar Contraseña:</span>
                        <input type="password" class="input_text" name="confirmPassword" />
                    </label>
                    <label><?php if(isset($errores)){
                                    echo "Las contraseñas no son iguales";                  
                                 }
                                 ?>
                        <?php echo validation_errors();?>
                    </label>
                    <label>
                        <input type="reset" class="button" value="Limpiar" />
                        <input type="submit" class="button" value="Guardar" />         
                    </label> 
                </form>
                </div>

            </div>

        </div>

    </div>

</div>




