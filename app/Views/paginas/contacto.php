<?php

$this->setData([
    'title' => 'JD Dominican Farm en Moca | Contacto',
    'descripcion' => 'Granja familiar con sana diversión en República Dominicana, ubicada en la calle Cacique abajo Moca,
         provincia Espaillat.Tel:(849)439-6867. A pocos minutos de Santiago de los caballeros.',
]);

$this->extend('plantilla/layout');

?>

<?php echo $this->Section("cuerpo"); ?>

<!-- CONTENIDO PRINCIPAL -->
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover p-r z-1"
    style="background-image: url(<?php echo base_url() ?>assets-farm/images/bg/paisaje-moca-1920x520.jpg);">
    <div class="brand-card text-center">
        <img src="<?php echo base_url() ?>assets-farm/images/icon/tours-granja-dominican-farm.png" alt="tours granja en Moca">
        <h4>Contacto</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="page-title">
                    <h1>Contáctanos</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="<?php echo base_url() ?>">Inicio</a></li>
                        <li class="active">Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-Banner Section ======-->
<!--====== Start Contact Information section ======-->
<section class="contact-information-one p-r z-1 pt-215 pb-130">
    <div class="information-img_one wow fadeInRight">
        <img src="<?php echo base_url() ?>assets-farm/images/contact/jd-dominican-farm-pareja-525-557.jpg"
            alt="JD Dominican Farm - Moca">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="contact-two_information-box">
                    <div class="section-title section-title-left mb-50 wow fadeInUp">
                        <span class="sub-title">¿Tienes algo que contarnos?</span>
                        <h2>Encantados de escucharte</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="information-item-two info-one mb-30 wow fadeInDown">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>Dirección</h5>
                                    <p>Cacique abajo - Moca<br>
                                        (Rep. Dominicana)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="information-item-two mb-30 info-two wow fadeInUp">
                                <div class="icon">
                                    <i class="far fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5>Email</h5>
                                    <p><a href="mailto:info@jddominicanfarm.com">info@jddominicanfarm.com</a></p>
                                    <p><a href="mailto:jddominicanfarm.com"></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="information-item-two mb-30 info-three wow fadeInDown">
                                <div class="icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5>Teléfono</h5>
                                    <p><a href="tel:+18494396867">+1(849)439-6867</a></p>
                                    <p><a href=""></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <p>En JD Dominican Farm, estamos encantados de escucharte. No dudes en contactarnos
                                para cualquier asunto o pregunta que tengas que hacernos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Contact Information section ======-->
<!--====== Start Map section ======-->
<section class="contact-page-map">
    <div class="map-box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12659.176781090187!2d-70.49143528893799!3d19.38664793445473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1d7659bd64fb5%3A0x3005b86d49987c6a!2sJD%20Dominican%20Farm!5e0!3m2!1ses-419!2sdo!4v1675994656532!5m2!1ses-419!2sdo"></iframe>
    </div>
</section>
<!--====== End Map section ======-->
<!-- /CONTENIDO PRINCIPAL -->

<?php $this->endSection(); ?>