
<div class="site-section">
      <div class="container">
        <div class="row">
          <?php foreach($Producto->result() as $producto){ ?>
          <div class="col-md-5">
            <img src="<?php echo $producto->imagen;?>" alt="Image" height="200px" class="img-fluid" >
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $producto->nombre;?></h2>
            <p><?php echo $producto->marca;?></p>
            <p><strong class="text-primary h4">$<?php echo $producto->precio;?></strong></p>
            <div class="mb-1 d-flex">
            <div class="mb-5">

						<form action="" method="POST">


						<input type="hidden" name="id" id="id" value="<?php echo $this->encryption->encrypt($producto->id); ?>">
						<input type="hidden" name="nombre" id="nombre" value="<?php echo $this->encryption->encrypt($producto->nombre);?>">
						<input type="hidden" name="precio" id="precio" value="<?php echo $this->encryption->encrypt($producto->precio);?>">
            <!--<input type="hidden" name="cantidad" id="cantidad" value="<?php //echo $this->encryption->encrypt(1);?>">-->

            <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 120px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>
                  <input type="text" name="cantidad" id="cantidad" class="form-control text-center" value="1" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>
                </div>
              </div>

							<button class="buy-now btn btn-sm btn-primary"
							name="btnAccion"
							value="Agregar"
							type="submit"
							>
							Agregar Al carro
							</button>


						</form>

          </div>
          <?php } ?>

        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Productos Destacados</h2>
          </div>
        </div>
        <div class="row">
        <?php $cont=0;
				foreach($listaTodos->result() as $producto) {
					if ($cont < 4) {
						// code...


					?>
          <div class="col-3">
            <div class="card">
              <div class="item">
                <div class="block-5 text-center">
                  <figure class="block-4-image">
                    <img src="<?php echo $producto->imagen;?>" alt="image-placeholder" class="card-image-top" height="200px">
                  </figure>
                  <div class="card-body">
                    <h4><a href="#"><?php echo $producto->nombre;?></a></h4>
                    <h5 class="card-title font-weight-bold">$<?php echo $producto->precio;?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
				<?php $cont=$cont+1;
			}else{
				break;
			}
		} ?>
        </div>
      </div>
    </div>
  </div>
</div>
