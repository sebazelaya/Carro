

<div class="site-blocks-cover aos-init aos-animate" style="background-image: url(https://www.lavanguardia.com/r/GODO/LV/p3/WebSite/2016/07/06/Recortada/APTOPIX_France_Cycling_Tour_de_France-0ca3a_20160705175554-k6sE-U403004950755PsH-992x558@LaVanguardia-Web.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-4 text-center text-md-left pt-6 pt-md-12">
            	<h1 class="mb-3" style="color:white;">Encuentra lo mejor del ciclismo </h1>
            	<div class="intro-text text-center text-md-left">
              	<h3 class="mb-5" style="color:ivory">Pinguerbike ahora online</h3>
              	<p>

			  	</p>
            </div>
          </div>
        </div>
      </div>
	</div>




    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Nuestros Productos!</h2>
          </div>
        </div>
		<br>

    <div class="row no-gutters products">
    <?php foreach ($Productos->result() as $producto) { ?>
      <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                  <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="<?= base_url() ?>index.php/detalles/producto/<?php print $producto->id ?>" class="item">
                        <img src="<?php echo $producto->imagen ?>" style ="height:300px;"alt="Image placeholder" class="img-fluid"></a>
                      </figure>
						<div class="block-4-text p-4">
                         <h3><a class="text-primary font-weight-bold"><?php echo $producto->nombre ?></a></h3>
                            <p class="mb-0">Descripcion</p>
              <p class="text-primary font-weight-bold">$<?php echo number_format($producto->precio) ?> CLP</p>

							<form action="" method="post">

							<input type="hidden" name="id" id="id" value="<?php echo $this->encryption->encrypt($producto->id); ?>">
							<input type="hidden" name="nombre" id="nombre" value="<?php echo $this->encryption->encrypt($producto->nombre);?>">
							<input type="hidden" name="precio" id="precio" value="<?php echo $this->encryption->encrypt($producto->precio);?>">
							<input type="hidden" name="cantidad" id="cantidad" value="<?php echo $this->encryption->encrypt(1);?>">

							</form>
						</div>
					</div>
        </div>
<?php } ?>
</div>

		</div>
