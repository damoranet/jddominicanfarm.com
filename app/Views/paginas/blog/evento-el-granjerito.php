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
                    <h1>Summer Camp JD Dominican Farm</h1>
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
                            <img src="<?php echo base_url() ?>assets-farm/images/eventos/campamento-de-verano-niños-granja-jd-farm-moca.jpg" alt="Blog Image">
                        </div>
                        <div class="post-content">
                            <div class="entry-content">
                                <a href="#" class="cat-btn">JD Dominican Farm</a>
                                <h3 class="title">Campamento de verano </h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="far fa-calendar-alt"></i><a href="#">25 Junio 2023</a></span></li>
                                    </ul>
                                </div>
                            </div>
                            <p> En este campamento de verano, los niños tendrán la oportunidad de aprender más sobre la <strong>naturaleza</strong>,
                                las <strong>plantas</strong>, las <strong>aves</strong> y la <strong>fauna</strong> que les rodea. También podrán:</p>
                            <li><strong>Establecer vínculos con los animales</strong>:Los niños pueden establecer vínculos con animales como caballos, cabras,
                                vacas, gallinas y conejos durante su estancia en el campamento de verano. Es una forma estupenda de enseñar responsabilidad a los niños
                                cuidando de los animales y divirtiéndose jugando con ellos.</li> <br>
                            <li><strong>Ejercicios al aire libre</strong>:Participar en actividades al aire libre como la pesca, la equitación y el senderismo puede ayudar
                                a mantener a los niños físicamente activos mientras disfrutan de estar al aire libre. </li> <br>
                            <li><strong>Desarrollar habilidades sociales</strong>:Interactuar con otros niños en el campamento de verano puede ayudar a desarrollar habilidades
                                sociales y hacer nuevos amigos mientras se divierten en un entorno seguro rodeado de naturaleza y animales.</li>
                            </p>
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