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
        <img src="<?php echo base_url() ?>assets-farm/images/icon/aves-granja-dominican-farm.png" alt="eventos en moca">
        <h4></h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="page-title">
                    <h1>JD Dominican Farm</h1>
                    <h2 class="texto-blanco" data-animation="fadeInDown" data-delay=".4s">Actividades para toda la familia</h2>                    
                    <ul class="breadcrumbs-link">
                        <li><a href="<?php echo base_url() ?>">Inicio</a></li>
                        <li class="active">Eventos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End page-banner section ======-->
<!--====== Listado de eventos ======-->
<section class="blog-two pb-90 pt-130 light-gray-bg pb-160">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10">
                <div class="section-title text-center mb-60 wow fadeInDown">
                    <span class="sub-title">Próximos eventos</span>
                    <h2>Disfruta nuestra granja </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-post-item-two mb-40 wow fadeInUp">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url() ?>assets-farm/images/eventos/actividades-para-ninos.jpg"
                            alt="Evento Easter Hunts en JD Dominican Farm">
                    </div>
                    <div class="entry-content bg-white">
                        <a href="<?php echo base_url() ?>blog/evento-easter-hunts" class="cat-btn">Easter Hunts 2025</a>
                        <h3 class="title"><a href="https://buy.stripe.com/dR6eWe6ZJ5FIcHmbII" target="_blank" rel="noopener noreferrer">Entradas disponibles</a>
                        </h3>
                        <div class="post-meta">
                            <ul>
                                <li><span><i class="far fa-calendar-alt"></i>29-30 de marzo y 5-6, 12-13 de abril</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-post-item-two mb-40 wow fadeInDown">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url() ?>assets-farm/images/eventos/actividades-granja-escuela-jdfarm.jpg"
                            alt="Evento viaje escolar JD Dominican Farm">
                    </div>
                    <div class="entry-content bg-white">
                        <a href="#" class="cat-btn">Viaje escolar 2025</a>
                        <h3 class="title">Experiencia escolar en la granja</h3>
                        <div class="post-meta">
                            <ul>
                                <li><span><i class="far fa-calendar-alt"></i>Agenda tu viaje</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-post-item-two mb-40 wow fadeInUp">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url() ?>assets-farm/images/eventos/actividades-en-familia-granja-jdfarm.jpg"
                            alt="Actividades divertidas para este fin de semana">
                    </div>
                    <div class="entry-content bg-white">
                        <a href="<?php echo base_url() ?>blog/evento-el-granjerito" class="cat-btn">Granjero</a>
                        <h3 class="title">Evento para compartir en familia</h3>
                        <div class="post-meta">
                            <ul>
                                <li><span><i class="far fa-calendar-alt"></i>Cupo limitado</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="button-box text-center wow fadeInUp">
                    <a href="https://buy.stripe.com/dR6eWe6ZJ5FIcHmbII" target="_blank"
                    class="main-btn bordered-btn bordered-yellow">Comprar Entrada Evento Easter Hunt 2025</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== /Listado de eventos ======-->
<!-- /CONTENIDO PRINCIPAL -->

<?php $this->endSection(); ?>