<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pinguerbike</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/aos.css">

    <link rel="stylesheet" href="<?= base_url() ?>plantilla/css/style.css">

  </head>
  <body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-1 text-center">
              <div class="site-logo">
                <a href="<?= base_url();?>index.php/Home" class="js-logo-clone">Pinguerbike</a>
              </div>
            </div>

            <div class="col-6 col-md-6 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="<?= base_url() ?>index.php/Auth/"><span class="icon icon-person"></span></a></li>
                  <li class="nav-item active">
                    <a class="site-cart" href="<?= base_url() ?>index.php/Carro">
                    <span class="icon icon-shopping_cart"></span><span class="count"><?php
                        echo (empty($_SESSION['carro']))?0:count($_SESSION['carro']);
                        ?></span></a>
                </li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
            <a href="<?= base_url();?>index.php/Home">Home</a></li>
            <li><a href="<?= base_url(); ?>index.php/Catalogo">nuestros productos</a>
            </li>
            <li><a href="contact.html">Contactanos!</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <br/>
    <br/>
