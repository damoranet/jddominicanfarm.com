<?php

$this->setData([
    'title' => 'Espacio Familiar con eventos infantiles JD Dominican farm | Eventos',
    'descripcion' => 'Ofrece actividades divertidas, creativas y 
         educativas para toda la familia. El lugar ideal para que los niños jueguen, 
          conecten con la naturaleza e interactúen con los animalitos. Granja familiar Moca',
]);

$this->extend('plantilla/layout');

?>

<?php echo $this->Section("cuerpo"); ?>

<!-- CONTENIDO PRINCIPAL -->
<!--====== Start page-banner section ======-->
<section class="page-banner bg_cover position-relative z-1" style="background-image: 
            url(<?php echo base_url() ?>assets-farm/images/bg/espacio-familiar-granja-en-moca-1440x520.jpg);">
    <div class="brand-card text-center">
        <img src="<?php echo base_url() ?>assets-farm/images/icon/aves-granja-dominican-farm.png" alt="icon">
        <h4>Eventos</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="page-title">
                    <h1>Easter Egg Hunt</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="<?php echo base_url() ?>">Inicio</a></li>
                        <li class="active">Eventos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End page-banner section ======-->
<!--====== Start Blog Details section ======-->
<section class="blog-details-page pt-170 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details-wrapper mb-40 wow fadeInUp">
                    <div class="blog-post-item">
                        <div class="post-thumbnail">
                            <img src="<?php echo base_url() ?>assets-farm/images/eventos/poster-evento-easter-egg-2023-770x505.jpg"
                                alt="Blog Image">
                        </div>
                        <div class="post-content">
                            <div class="entry-content">
                                <a href="#" class="cat-btn">Easter Egg Hunt</a>
                                <h2 class="title">Búsqueda de huevos de Pascua</h2>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#"> 18 - 19 y 25 - 26
                                                    de Marzo 2023 </a></span></li>
                                    </ul>
                                </div>
                            </div>
                            <p>La búsqueda de huevos de Pascua (Easter Egg Hunt) es una actividad tradicional que se
                                realiza durante la celebración de la Pascua.
                                Consiste en esconder huevos de Pascua en un lugar determinado, generalmente al aire
                                libre, para que los niños los encuentren.
                            </p>
                            <p>
                                En <strong>JD Dominican</strong> <strong>Farm</strong> comenzaremos con dos tandas
                                para la recogida de huevos de Pascua, desde la <strong>12:00pm</strong> a
                                <strong>2:00pm</strong>
                                y las <strong>4:00pm </strong> a <strong>6:00pm</strong>.
                            </p>
                            <p>La recolección de huevos será organizada por grupos de edades, los niños mayores de
                                12 años no participan.
                            </p>
                            <p>El precio de la <strong>entrada</strong> para niños de <strong>3 a 12 </strong> años
                                es de <strong>$550</strong>pesos e incluye:
                            </p>
                            <li>Bolsa para la recolección de huevos</li>
                            <li>Acceso al laberinto de recolección de huevos de pascua </li>
                            <li>Fotos con el conejo de pascua y otros personales</li>
                            <li>Participación en sorteo</li>
                            <li>Interacciones con animales</li>
                            <li>Muchas sorpresas más</li>
                            <br>
                            <p>Los<strong> niños</strong> a partir de <strong>12
                                    años</strong><strong>pagarán $300</strong> pesos al
                                <strong>igual</strong> que
                                los <strong>adultos</strong> y tendrán acceso a:
                            </p>
                            <li>Entrada a la granja</li>
                            <li>Tour guiado</li>
                            <li>Fotos con personajes</li>
                            <li> Interacciones con animales</li>
                            <br>
                            <p>
                                La Pascua es una época especial para mucha gente, y aquí en JD Dominican
                                Farm, podemos garantizar una experiencia agradable tanto para
                                los niños como para los adultos. ¡Es una forma estupenda de divertise y
                                celebrarlo!.
                            </p>
                        </div>
                        <div class="author-thumb">
                        </div>
                        <div class="post-navigation pb-30">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="prev-post post-nav-item d-flex mb-30">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar-widget-area">
                    <div class="widget contact-info-widget bg_cover mb-40 wow fadeInUp"
                        style="background-image: url(assets/images/widget/contact-1.jpg);">
                        <div class="contact-info-box text-center">
                            <div class="icon">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="info">
                                <h4><a href="tel:+18494396867">+1 (849) 439 6867</a></h4>
                                <h5><a href="mailto:info@jddominicanfarm.com">info@jddominicanfarm.com</a></h5>
                                <a href="<?php echo base_url() . 'contacto' ?>" class="main-btn bordered-btn bordered-black">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Details section ======-->
<!-- /CONTENIDO PRINCIPAL -->

<?php $this->endSection(); ?>