
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
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="Home">Inicio</a> <span class="mx-2 mb-0">/</span> <a href="Carro">Carro</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Formulario</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalles del Comprador</h2>
            <div class="p-3 p-lg-5 border">
              <form class="form-horizontal" role="form" action="<?php base_url(); ?>Completado/subirDatos2" method="POST">
              <div class="form-group">
                <label for="c_region" class="text-black">Region <span class="text-danger">*</span></label>
                <select type="text" id="c_region" name ="c_region" class="form-control" required>
                  <option value="">Selecciona tu region </option>    
                  <option value="Region de Tarapaca">Region de Tarapaca</option>    
                  <option value="Region de Antofagasta">Region de Antofagasta</option>    
                  <option value="Region de Atacama">Region de Atacama</option>    
                  <option value="Region de Coquimbo">Region de Coquimbo</option>    
                  <option value="Region de Valparaiso">Region de Valparaiso</option>    
                  <option value="Region de Libertador Bernardo O'Higgins">Region de Libertador Bernardo O'Higgins</option>     
                  <option value="Region de Maule">Region de Maule</option>     
                  <option value="Region de Concepcion">Region de Concepcion</option>     
                  <option value="Region de Araucania">Region de Araucania</option>     
                  <option value="Region de Lagos">Region de Lagos</option>     
                  <option value="Region de Aysen">Region de Aysen</option>    
                  <option value="Region de Magallanes">Region de Magallanes</option>     
                  <option value="Region de Metropolitana">Region de Metropolitana</option>     
                  <option value="Region de de los Rios">Region de de los Rios</option>     
                  <option value="Region de Arica">Region de Arica</option>     
                  <option value="Region de Ñuble">Region de Ñuble</option>    
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nombres <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_nombres" name="c_nombres" required>
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Ciudad" required>
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-12">
                  <label for="c_email_address" class="text-black">Correo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address" required>
                </div>
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black">Comentarios</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
              </div>
              <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block">Realizar el Pedido</button>
              </div>
              </form>
              </div>
          </div>
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Su Orden de Compra</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto(s)</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                      <?php $total=0;?>
                      <?php foreach($_SESSION['carro'] as $indice=>$producto){ ?>
                        <td><?php echo $producto['nombre'];?><strong class="mx-2"> x </strong><?php echo $producto['cantidad'];?> </td>
                        <td><?php echo number_format($producto['precio']*$producto['cantidad'],3);?></td>        
                        <?php $total=$total+($producto['precio']*$producto['cantidad']);?>
                      </tr>
                      <?php } ?>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$<?php echo number_format($total,3);?></strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

