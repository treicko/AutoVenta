
<div class="container">
  <div class="bs-docs-section">
    <div class="row">
    
      <div class="col-md-3">

        <div class="btn-group">
          <h1>Busqueda por: </h1>
          <select class="form-control">
            <?php foreach($vehiculos as $vehiculo_item){?>
              <option value="one"><?php echo $vehiculo_item['modelo']?></option>
            <?php }?>
             <option value="five" selected>Todos Los Modelos</option>
          </select><br>

           <select class="form-control">
            <?php foreach($vehiculos as $vehiculo_item){?>
              
              <option value="one"><?php echo $vehiculo_item['marca']?></option>
             
            <?php }?>
             <option value="five" selected>Todos Las Marcas</option>
           </select><br>

          <select class="form-control">
            <option value="one">Hasta: 5000</option>
            <option value="two">Hasta: 10000</option>
            <option value="three">Hasta: 15000</option>
            <option value="four">Hasta: 20000</option>
            <option value="four">Mayor: 20000</option>
            <option value="five" selected>Todos Los Precios</option>
          </select>
        </div>

       </div>

      <div class="col-md-9">
        <div class="row">
          <h1>Catalogo</h1>

          <div class="col-md-4">
            <span class="text">Ascendente / Descendente</span>
            <div class="btn-toolbar">
              <div class="btn-group">
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-sort-by-alphabet"></span></button>
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-sort-by-alphabet-alt"></span></button>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            Ordenar Por:
            <select class="form-control">
              <option value="one">Modelo</option>
              <option value="two">Marca</option>
              <option value="five" selected>Precio</option>
            </select>
          </div>

          <div class="col-md-4" align="right">
            <span class="text">Cambiar vista</span>
            <div class="btn-toolbar">
              <div class="btn-group">
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th"></span></button>
                  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span></button>
              </div>
            </div>
          </div>

        </div><br>

            <div class="row">
            <?php foreach($vehiculos as $vehiculo_item){?>
            
            <div class="col-md-4">
                <a href="<?php echo base_url(); ?>index.php/vehiculos/ver_datos_vehiculo/<?php echo $vehiculo_item['Id_vehiculo']?>" class="thumbnail">
                  <img src="<?php echo base_url();?>images/img1.jpg" alt="" width="250" height="270"  class="img-rounded"/>
                </a>  
                <div class="caption">
                  <h4><?php echo $vehiculo_item['precio']?></h4>
                  <p><?php echo $vehiculo_item['marca']?></p>
                </div>
            </div>
            
            <?php }?>
            </div>

        

      </div>

    </div>
  </div>
</div>






