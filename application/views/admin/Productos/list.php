<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Productos
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>index.php/mantenimiento/productos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Producto</a>
                    </div>
                </div>
            </div>
            <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id = "example1" class="table table-bordered btn-hover">
                            <thread>
                                <tr>
                                    <th>#ID</th>
                                    <th>Nombres</th>
                                    <th>Precio</th>
                                    <th>disponible</th>
                                </tr>
                            </thread>
                            <tbody>
                               <?php if(!empty($productos)):?>
                                   <?php foreach($productos as $producto):?>
                                        <tr>
                                            <td><?php echo $producto->id;?></td>
                                            <td><?php echo $producto->nombre;?></td>
                                            <td><?php echo $producto->precio;?></td>
                                            <td><?php echo $producto->cantidad;?></td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
