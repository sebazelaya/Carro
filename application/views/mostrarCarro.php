
<div class="container">
<br>
<h3>Lista del carro de compras</h3>
<?php if(!empty($_SESSION['carro'])){
    ?>
<table class="table table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0;?>
        <?php foreach($_SESSION['carro'] as $indice=>$producto){ ?>
        <tr>
            <td width="40%"><?php echo $producto['nombre'];?></td>
            <td width="15%" class="text-center"><?php echo $producto['cantidad'];?></td>
            <td width="20%" class="text-center"><?php echo $producto['precio'];?></td>
            <td width="20%" class="text-center"><?php echo number_format($producto['precio']*$producto['cantidad'],3);?></td>
            <td width="5%">

            <form action="" method="post">

            <input type="hidden"
            name="id"
            id="id"
            value="<?php echo $this->encryption->encrypt($producto['id']);?>">

                <button
                class="btn btn-danger"
                type="submit"
                name="btnAccion"
                value="Eliminar"
                >Eliminar</button>
                </form>
            </td>

        </tr>
        <?php $total=$total+($producto['precio']*$producto['cantidad']);?>
        <?php } ?>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,3);?></h3></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5">
            <form action="<?php base_url() ?>Formulario" method="post">
                <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder" name="btnAccion">
                    Proceder a Pagar>>
                </button>
            </form>
            </td>
        </tr>
    </tbody>
</table>
<div class="row">
            <div class="col-md-6">
              <div class="row mb-5">
                <div class="col-md-6">
                  <a href="<?php base_url() ?>/tienda/">
                    <button class="btn btn-outline-primary btn-sm btn-block">Continuar Comprando</button>
                  </a>
                </div>
              </div>
            </div>
</div>

<?php }else{?>
<div class="alert alert-success" role="alert">
    No hay productos en el carro...
</div>
<?php } ?>
</div>
