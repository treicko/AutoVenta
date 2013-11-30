

 <div class="container">
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-lg-12">

        <div class="page-header">
          <h1 id="tables" >Lista De Accesorios</h1>
        </div>

        <div class="bs-example table-responsive">
          <p><a class='links' href="<?php echo base_url(); ?>index.php/accesorio/nuevoAccesorio"><img src="<?php echo base_url(); ?>images/icono_add.png" width="16" height="16" />Añadir Accesorio</a></p>    
          <table >
            <thead>
              <tr>
                <th>Nombre</th>  
                <th>Categoria</th>
                <th>Precio</th>
                <th>descripcion</th> 
                <th colspan="2">Acciones</th>
              </tr>
            </thead>	
            <tbody>
              <?php foreach($accesorios as $accesorio_item){?>
              <tr class="danger">
                <td><?php echo $accesorio_item['nombre']?></td>	
                <td><?php echo $accesorio_item['categoria'] ?></td>
                <td><?php echo $accesorio_item['precio']?></td>
                <td><?php echo $accesorio_item['descripcion']?></td>
                <td> <a href="<?php echo base_url(); ?>index.php/accesorio/editarAccesorio/<?php echo $accesorio_item['id']?>"><img src='<?php echo base_url(); ?>images/icono_edit.png' width='16' height='16' title="Editar"/></a></td>
                <td> <a href="<?php echo base_url(); ?>index.php/accesorio/eliminarAccesorio/<?php echo $accesorio_item['id']?>" onclick="return eliminarVariable('Esta seguro que desea eliminar el registro?')"><img src='<?php echo base_url(); ?>images/icono_remove.png' width='16' height='16' title="Eliminar"/></a></td>	
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
  </div>
</div>

