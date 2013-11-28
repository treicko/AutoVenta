<h1>VEHICULOS</h1>


<div class="container">
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-lg-12">

        <div class="page-header">
          <h1 id="tables" >Lista De Vehiculos</h1>
        </div>

        <div class="bs-example table-responsive">
          <p><a class='links' href="<?php echo base_url(); ?>index.php/vehiculos/nuevo_vehiculo"><img src="<?php echo base_url(); ?>images/icono_add.png" width="16" height="16" />Añadir Vehiculo</a></p>    
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Placa</th>  
                <th>Modelo</th>
                <th>Marca</th>
                <th>Precio</th> 
                <th colspan="2">Acciones</th>
              </tr>
            </thead>	
            <tbody>
              <?php foreach($vehiculos as $vehiculo_item){?>
              <tr class="danger">
                <td><?php echo $vehiculo_item['placa']?></td>	
                <td><?php echo $vehiculo_item['modelo'] ?></td>
                <td><?php echo $vehiculo_item['marca']?></td>
                <td><?php echo $vehiculo_item['precio']?></td>
                <td> <a href="<?php echo base_url(); ?>index.php/vehiculos/editar_vehiculo/<?php echo $vehiculo_item['Id_vehiculo']?>"><img src='<?php echo base_url(); ?>images/icono_edit.png' width='16' height='16' title="Editar"/></a></td>
                <td> <a href="<?php echo base_url(); ?>index.php/vehiculos/eliminar_vehiculo/<?php echo $vehiculo_item['Id_vehiculo']?>" onclick="return eliminarVariable('Esta seguro que desea eliminar el registro?')"><img src='<?php echo base_url(); ?>images/icono_remove.png' width='16' height='16' title="Eliminar"/></a></td>	
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
  </div>
</div>






