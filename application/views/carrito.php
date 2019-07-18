<div class="container">
    <div class="col-12">
        <?php
          if (isset($_POST['btnAccion'])) {
              switch ($_POST['btnAccion']) {
                  case 'Agregar':
                      if (
                          !is_numeric($this->encryption->decrypt($_POST['id'])) || !is_string($this->encryption->decrypt($_POST['nombre']))
                          || !is_string($this->encryption->decrypt($_POST['precio'])) || !is_numeric($_POST['cantidad'])
                      ) {
                          echo '<div class="alert alert-danger" role="alert">';
                          echo '<strong>Oh lo sentimos!</strong> No se agrego el producto solicitado</div>';
                      } 
                      else {
                          $id = $this->encryption->decrypt($_POST['id']);
                          $nombre = $this->encryption->decrypt($_POST['nombre']);
                          $precio = $this->encryption->decrypt($_POST['precio']);
                          $cantidad = $_POST['cantidad'];

                      if (!isset($_SESSION['carro'])) {
                        echo '<br><div class="alert alert-success" role="alert">';
                        echo '<strong>Se agrego con exito el producto solicitado al carrito.</strong></div>';
                          
                          $producto = array(
                              'id' => $id,
                              'nombre' => $nombre,
                              'precio' => $precio,
                              'cantidad' => $cantidad
                          );
                          $_SESSION['carro'][0] = $producto;
                      } else {


                          echo '<br><div class="alert alert-success" role="alert">';
                          echo '<strong>Se agrego con exito el producto solicitado al carrito.</strong></div>';


                          $n_producto = count($_SESSION['carro']);
                          $producto = array(
                              'id' => $id,
                              'nombre' => $nombre,
                              'precio' => $precio,
                              'cantidad' => $cantidad
                          );
                          $_SESSION['carro'][$n_producto] = $producto;
                      }
                    }

                      break;
                  case 'Eliminar':
                      if (is_numeric($this->encryption->decrypt($_POST['id']))) {
                          $nombre_eliminar = $this->encryption->decrypt($_POST['id']);
                          foreach ($_SESSION['carro'] as $indice => $producto) {
                              if ($producto['id'] == $nombre_eliminar) {
                                  unset($_SESSION['carro'][$indice]);
                                  echo " <script> alert('Elemento borrado...') </script> ";
                              }
                          }
                      }
                    break;
              }
          }
          ?>
    </div>
</div>
