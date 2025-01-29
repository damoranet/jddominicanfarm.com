<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>JD Dominican Farm</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets-farm/images/favicon.ico" type="image/png">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/fonts/fontawesome/css/all.min.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/fonts/flaticon/flaticon.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/vendor/magnific-popup/dist/magnific-popup.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/vendor/slick/slick.css">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/vendor/nice-select/css/nice-select.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/vendor/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="<?php echo base_url() ?>theme-orgarium/assets/css/style.css">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== Start Header Section ======-->
        <header class="header-area">
            <div class="header-top-bar top-bar-one dark-black-bg">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-6">
                            <div class="top-bar-left d-flex align-items-center">
                                <span class="text">Bienvenidos a:  JD Dominican Farm</span>
                                <!--<span class="lang-dropdown">
                                    <select class="wide">
                                        <option value="01">English</option>
                                        <option value="02">French</option>
                                    </select>
                                </span>-->
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-6">
                            <div class="top-bar-right">
                                <span class="text"><i class="far fa-clock"></i>Horario : Lun - Dom, 11:00 am - 06:00 pm</span>
                                <ul class="social-link">
                                    <li><a href="https://instagram.com/jddominicanfarm?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/watch?v=UX3Joeiw2T0" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <!--<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navigation navigation-two">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <div class="primary-menu">
                        <div class="site-branding">
                            <a href="<?php echo base_url()?>" class="brand-logo"><img src="<?php echo base_url() ?>assets-farm/images/logo/logo-1.png" alt="Site Logo"></a>
                        </div>
                        <div class="nav-inner-menu">
                            <div class="nav-menu">
                                <!--=== Mobile Logo ===-->
                                <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                                    <a href="<?php echo base_url()?>" class="brand-logo"><img src="<?php echo base_url() ?>assets-farm/images/logo/logo-1.png" alt="Site Logo"></a>
                                </div>
                                <!--=== Navbar Call Button ===-->
                                <div class="call-button text-center">
                                    <span><i class="far fa-phone"></i><a href="tel:+1(849)439-6867">+1(849)439-6867</a></span>
                                </div>
                                <!--=== Main Menu ===-->
                                <nav class="main-menu">
                                    <ul>
                                    <li><a href="<?php echo base_url()?>">Inicio</a></li>
                                        <li><a href="<?php echo base_url() . 'nosotros' ?>">Nosotros</a></li>
                                        <li class="menu-item has-children"><a href="#">Servicios</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url() . 'servicios' ?>">Servicios</a></li>
                                                <li><a href="<?php echo base_url() . 'servicio-detalle' ?>">Servicio detalle</a></li>
                                            </ul>
                                        </li>
                                        </li>
                                        <li class="menu-item has-children"><a href="#">Eventos</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url() . 'evento1' ?>">Evento 1</a></li>                                                
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url() . 'faqs' ?>">Faqs</a></li>                                        
                                        <li><a href="<?php echo base_url() . 'contacto' ?>">Contacto</a></li>                                        
                                        <li class="menu-item has-children"><a href="#">+</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?php echo base_url() . 'granjeros' ?>">Granjeros</a></li>
                                                <li><a href="<?php echo base_url() . 'blog-estandar' ?>">Blog Estándar</a></li>
                                                <li><a href="<?php echo base_url() . 'blog-detalle' ?>">Blog Detalle</a></li>
                                                <li><a href="<?php echo base_url() . 'productos' ?>">Nuestros Productos</a></li>
                                                <li><a href="<?php echo base_url() . 'producto-izda' ?>">Producto Sidebar Izda</a></li>
                                                <li><a href="<?php echo base_url() . 'producto-dcha' ?>">Producto Sidebar Dcha</a></li>
                                                <li><a href="<?php echo base_url() . 'producto-detalles' ?>">Producto Detalles</a></li>
                                                <li><a href="<?php echo base_url() . 'carrito' ?>">Carrito</a></li>
                                                <li><a href="<?php echo base_url() . 'checkout' ?>">Checkout</a></li>                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!--=== Navbar Menu Button ===-->
                                <div class="menu-button">
                                    <a href="<?php echo base_url() . 'carrito' ?>l" class="main-btn btn-yellow">Entradas</a>
                                </div>
                            </div>
                            <!--=== nav Right Item ===-->
                            <div class="nav-right-item d-flex align-items-center">
                                <div class="call-button">
                                    <span><i class="far fa-phone"></i><a href="tel:+1(849)439-6867">+1(849)439-6867</a></span>
                                </div>
                                <div class="menu-button">
                                    <a href="<?php echo base_url() . 'carrito' ?>" class="main-btn btn-yellow">Entradas</a>
                                </div>
                                <div class="navbar-toggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--====== End Header Section ======-->