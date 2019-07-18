
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?= base_url() ?>Home">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Carro</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-top mb-4"><h1 class="text-black h5">Todos los Productos a tu disposicion!</h1></div>
                <div class="d-flex">
                </div>
              </div>
            </div>
            <div class="row">
            <?php foreach($Productos->result() as $producto) { ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                  <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="<?= base_url() ?>index.php/detalles/producto/<?php print $producto->id ?>" class="item">
                        <img src="../imagenes/<?=$producto->imagen ;?>" style ="height:300px;"alt="Image placeholder" class="img-fluid"></a>
                      </figure>
						<div class="block-4-text p-4">
                         <h3><a href="#"><?php echo $producto->nombre ?></a></h3>
                            <p class="mb-0">Descripcion</p>
							<p class="text-primary font-weight-bold">$<?php echo $producto->precio ?>CLP</p>

                        </div>
                  </div>
              </div>
              <?php } ?>
            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
