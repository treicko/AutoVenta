<div class="container">
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1 id="forms">Registrar Veh&iacute;culo</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="well">    
                    <?php echo validation_errors();?>
                    <?php $attributes = array('class' => 'bs-example form-horizontal'); ?>
                    <?php echo form_open('vehiculos/nuevo_vehiculo', $attributes);?>          
                    	<fieldset>
                            <legend>Veh&iacute;culo</legend>
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
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-default" type="reset" >Limpiar</button> 
                                    <button type="submit" class="btn btn-primary">Guardar</button> 
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



