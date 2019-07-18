
<?php
if(!empty($_SESSION['carro'])){
  $total=0;
  foreach($_SESSION['carro'] as $indice=>$producto){
    $total=$total+($producto['precio']*$producto['cantidad']);
  }
}
else {
  redirect('index.php/Carro',auto);
}
?>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <span class="icon-check_circle display-3 text-success"></span>
        <h2 class="display-3 text-black">¡Muchas Gracias!</h2>
        <p class="lead mb-5">Los productos han sido encargados Satisfactoriamente! :</p>
        <p>Los Productos seran enviados a la tienda!, no dude contactarse con nosotros mediante nuestro correo ante cualquier duda!.</p>
        <p><a href="<?= base_url(); ?>index.php/Home" class="btn btn-sm btn-primary">Volver a la Tienda</a></p>
        <?php $_SESSION['carro']=NULL;?>
        </div>
      </div>
    </div>
   </div>
</div>

<?php
?>