<div class="container">
    <div class="row">
        <div class="bs-example">
            <div class="jumbotron">
                <h1>Nombre Auto</h1>
                <div class="row">
                    <div class="col-md-7">
                        <!-- ooooooooooooo Inicio de carousel ooooooooooooo -->
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">

                                            <div class="active item">
                                                <img alt="" src="<?php echo base_url(); ?>/images/img1.jpg" >
                                                <div class="carousel-caption">                                      
                                                    <h4>En Venta</h4>
                                                    <p>0 km</p>
                                                </div>
                                            </div>

                                             <div class="item">
                                                <img alt="" src="<?php echo base_url(); ?>/images/img1.jpg" width="700" height="300">
                                                <div class="carousel-caption">
                                                    <h4>Third Thumbnail label</h4>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img alt="" src="<?php echo base_url(); ?>/images/img1.jpg" width="700" height="300">
                                                <div class="carousel-caption">
                                                    <h4>Third Thumbnail label</h4>
                                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                </div>
                                            </div> 

                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                                    </div>
     
                        <!-- ooooooooooooo Fin de carousel ooooooooooooo -->
                    </div>

                    <div class="col-md-5">     
                        Editar Vehiculo
                        <input type="hidden" class="input_text" name="id"  value="<?php echo $vehiculo['Id_vehiculo'];?>"/>
                        <label>
                        <span>Cliente: <?php echo $vehiculo['placa'];?> </span>
                        </label> 
                        <label>
                        <span>Telefono: <?php echo $vehiculo['modelo'];?> </span>
                        </label>                                
                        <label>
                        <span>Celular: <?php echo $vehiculo['marca'];?> </span>
                        </label> 
                        <label>
                        <span>Email: <?php echo $vehiculo['precio'];?> </span>
                        </label>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


