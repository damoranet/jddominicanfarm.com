<?php

$this->setData([
    'title' => 'El mejor lugar para disfrutar en Familia en Moca | JD Dominican Farm',
    'descripcion' => 'Ven a conocer y disfrutar de este increíble lugar dominicano. 
        JD Farm es un ambiente saludable que te ofrece una divertida aventura familiar en medio de animales
        y paisajes naturales. JD dominican farm granja familiar en república dominicana #Moca',
]);

$this->extend('plantilla/layout');

?>


<?php echo $this->Section("cuerpo"); ?>

<!-- CONTENIDO PRINCIPAL -->
<!--====== Start Hero Section ======-->
<section class="hero-area-three">
    <div class="hero-slider-one">
        <div class="single-slider p-r z-1">
            <div class="image-layer bg_cover"
                style="background-image: url(<?php echo base_url() ?>assets-farm/images/hero/jd-hogar-dominicano-1920x781.jpg);">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="hero-content text-white text-center">
                            <h1 data-animation="fadeInUp" data-delay=".5s">Granja en Moca</h1>
                            <h2 data-animation="fadeInDown" data-delay=".4s">Espacio familiar con sana diversión</h2>
                            <div class="hero-button pt-20" data-animation="fadeInDown" data-delay=".6s">
                                <a href="http://localhost/jddominicanfarm.com/eventos"
                                    class="main-btn btn-yellow">Actividades</a>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider p-r z-1">
            <div class="image-layer bg_cover"
                style="background-image: url(<?php echo base_url() ?>assets-farm/images/hero/espacio-familiar-granja-en-moca-1920x781.jpg);">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="hero-content text-white text-center">
                            <h2 data-animation="fadeInUp" data-delay=".5s">El lugar ideal para compartir en familia</h2>
                            <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">JD Dominican Farm</span>
                            <div class="hero-button pt-20" data-animation="fadeInDown" data-delay=".6s">
                                <a href="<?php echo base_url() .'contacto' ?>"
                                    class="main-btn btn-yellow">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider p-r z-1">
            <div class="image-layer bg_cover"
                style="background-image: url(<?php echo base_url() ?>assets-farm/images/hero/lugares-para-visitar-en-moca-jd-farm.jpg);">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="hero-content text-white text-center">
                            <h2 data-animation="fadeInUp" data-delay=".5s">Atracción turística en Moca</h2>
                            <span class="tag-line" data-animation="fadeInDown" data-delay=".4s">Granja Dominicana</span>
                            <div class="hero-button pt-20" data-animation="fadeInDown" data-delay=".6s">
                                <a href="<?php echo base_url() .'eventos' ?>"
                                    class="main-btn btn-yellow">Nuestros eventos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Hero Section ======-->
<!--====== Start Contact Information section ======-->
<section class="contact-information-one p-r z-1 pt-140 pb-40">
    <div class="information-img_one wow fadeInRight">
        <img src="<?php echo base_url() ?>assets-farm/images/hero/granja-familiar-jd-moca-525x644.jpg"
            alt="JD Dominican Farm - Moca">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="contact-two_information-box">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="about-content-box content-box-gap pr-lg-70 mb-50">
                                <div class="section-title section-title-left mb-30 wow fadeInUp">
                                    <span class="sub-title">JD Dominican Farm</span>
                                    <h2>En nuestra Granja</h2>
                                </div>
                                <p> Nos caracterizamos por ofrecer un ambiente amigable y acogedor para que
                                    todos los dominicanos y visitantes de otros lugares se sientan como en casa,
                                    al conectar con la naturaleza y nuestros animalitos.
                                </p>
                                <div class="skill-bar wow fadeInDown">
                                    <div class="skill-title">
                                        <h5>Horarios<span></h5>
                                    </div>
                                    <div class="progress-bar wow slideInLeft" style="width: 75%"></div>
                                    <div class="progress"></div>
                                </div>
                                <div class="skill-bar wow fadeInUp">
                                    <div class="skill-title">
                                        <h5>Sábados - Domingos</h5>
                                        <p><strong>11:00 am a <strong>6:00pm</strong></p>
                                    </div>
                                    <div class="progress-bar wow slideInLeft" style="width: 89%"></div>
                                    <div class="progress"></div>
                                </div>
                                <div class="about-button mt-60 wow fadeInDown">
                                    <a href="<?php echo base_url() ?>nosotros" class="main-btn bordered-btn">Saber
                                        más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Contact Information section ======-->
<!--====== Inicio Category section ======-->
<section class="category-one p-r z-1 pt-100 pb-20">
    <div class="shape shape-one"><span><img src="<?php echo base_url() ?>assets-farm/images/shape/leaf-1.png"
                alt=""></span></div>
    <div class="shape shape-two"><span><img src="<?php echo base_url() ?>assets-farm/images/shape/leaf-2.png"
                alt=""></span></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInUp">
                    <span class="sub-title">Dominican Farm</span>
                    <h2>Ven a conocer nuestras aves y animalitos</h2>
                </div>
            </div>
        </div>
        <!-- Aqui empieza una fila de 4 imagenes -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInDown">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/gallinas-jd-dominican-granja.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia">Faisanes</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInUp">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/caballo-jd-dominican-farm.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia">Caballo</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInDown">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/pavo-real-jd-dominicam-farm.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia"> Peacock</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInUp">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/emu-granja-dominicana-jd-farm.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia">Emu</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Aqui termina una fila de 4 imagenes -->
        <!-- Aqui empieza una fila de 4 imagenes -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInDown">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/chivo-cabra-animales-de-granja-moca-jd-farm.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia">Cabra</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInUp">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/gallo-granja-en-moca.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia">Gallina</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInDown">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/jicoteca-vista-granaja-en-moca.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia">Jicoteca</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-category-item mb-25 wow fadeInUp">
                    <div class="category-img">
                        <img src="<?php echo base_url() ?>assets-farm/images/category/pavo-real-granja-en-moca-aniles-bonitos.jpg"
                            alt="category">
                    </div>
                    <div class="category-info d-flex justify-content-between align-items-center">
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia">Pavo Real</a></h3>
                        <a href="<?php echo base_url() ?>experiencia" class="arrow-btn"><i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Aqui termina una fila de 4 imagenes -->
    </div>
</section>
<!--====== End Category section ======-->
<!--====== Start Blog Section ======-->
<section class="blog-section pt-90 pb-130 p-r z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title text-center mb-60 wow fadeInUp">
                    <span class="sub-title">Tírate una foto</span>
                    <h2>Disfruta e interactúa con ellos</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-post-item-two mb-40 wow fadeInDown">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url() ?>assets-farm/images/blog/aves-exoticas-granja-jd-moca-rd.jpg"
                            alt="">
                    </div>
                    <div class="entry-content">
                        <a href="<?php echo base_url() ?>experiencia" class="cat-btn">Aves exóticas</a>
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia"> Las más coquetas del país</a>
                        </h3>
                        <div class="post-meta">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-post-item-two mb-40 wow fadeInUp">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url() ?>assets-farm/images/blog/cabras-granja-dominicana-jd-dominican-farm-moca.jpg"
                            alt="">
                    </div>
                    <div class="entry-content">
                        <a href="<?php echo base_url() ?>experiencia" class="cat-btn">Cabras adorables</a>
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia"> Sociables y amistosas </a></h3>
                        <div class="post-meta">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="blog-post-item-two mb-40 wow fadeInDown">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url() ?>assets-farm/images/blog/conejos-granja-familiar-moca-jd.jpg"
                            alt="">
                    </div>
                    <div class="entry-content">
                        <a href="<?php echo base_url() ?>experiencia" class="cat-btn">Conejos tiernos</a>
                        <h3 class="title"><a href="<?php echo base_url() ?>experiencia"> Los más amorosos</a></h3>
                        <div class="post-meta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="button-box text-center wow fadeInUp">
                    <a href="<?php echo base_url() ?>experiencia" class="main-btn bordered-btn bordered-yellow">Conocer
                        nuestra experiencia</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Blog Section ======-->
<!--====== Start Video section ======-->
<section class="intro-video-one bg_cover p-r z-1" style="background-image: 
            url(<?php echo base_url() ?>assets-farm/images/bg/jddominicanfarm-juegos.jpg);">
    <div class="container-1350">
        <div class="container">
            <div class="col-lg-12">
                <div class="play-content-box text-center wow fadeInDown">
                    <a href="https://www.youtube.com/watch?v=UX3Joeiw2T0" class="video-popup"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="counter-wrap-two text-white pt-35 wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-counter-item mb-40">
                            <div class="text">
                                <h2 class="text-center"><span class="counter">Hazte un vídeo con nosotros</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--====== End Video section ======-->
<!--====== Start Testimonial Section ======-->
<section class="testimonial-two dark-black-bg p-r z-1 pt-130 pb-90">
    <div class="shape shape-one"><span><img src="<?php echo base_url() ?>assets-farm/images/shape/tree3.png"
                alt=""></span></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title section-title-white section-title-left pr-lg-70 mb-40 wow fadeInLeft">
                    <span class="sub-title">Granja Dominicana</span>
                    <h2> Costo de Entrada </h2>
                </div>
                <div class="testimonial-dots mb-40"></div>
            </div>
            <div class="col-lg-7">
                <div class="testimonial-slider-two mb-40 wow fadeInRight">
                    <div class="testimonial-item-two d-flex">
                        <div class="author-thumb">
                            <img src="<?php echo base_url() ?>assets-farm/images/icon/hucha-cerdito-125x137.png"
                                alt="precios granja Moca">
                        </div>
                        <div class="testimonial-content">
                            <div class="author-title-quote d-flex">
                                <div class="quote"><i class="fas fa-quote-right"></i></div>
                                <div class="author-title">
                                    <h4>$350 pesos por persona</h4>
                                    <p class="position"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item-two d-flex">
                        <div class="author-thumb">
                            <img src="<?php echo base_url() ?>assets-farm/images/inicio/nina-con-conejo-270x265.jpg"
                                alt="Niña disfrutando en Moca">
                        </div>
                        <div class="testimonial-content">
                            <p></p>
                            <div class="author-title-quote d-flex">
                                <div class="quote"><i class="fas fa-quote-right"></i></div>
                                <div class="author-title">
                                    <h4>¡Vive esta experiencia única!</h4>
                                    <p class="position"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item-two d-flex">
                        <div class="author-thumb">
                            <img src="<?php echo base_url() ?>assets-farm/images/inicio/nino-pequeno-270x266.jpg"
                                alt="precios granja JD Dominican Farm">
                        </div>
                        <div class="testimonial-content">
                            <div class="author-title-quote d-flex">
                                <div class="quote"><i class="fas fa-quote-right"></i></div>
                                <div class="author-title">
                                    <h4>Menores de 3 años entran gratis</h4>
                                    <p class="position"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Testimonial Section ======-->
<!--====== Start Why Choose Section ======-->
<section class="why-choose-one p-r z-1 pt-130">
    <div class="shape shape-one"><span><img src="<?php echo base_url() ?>assets-farm/images/shape/leaf-3.png"
                alt=""></span></div>
    <div class="shape shape-two"><span><img src="<?php echo base_url() ?>assets-farm/images/shape/leaf-2.png"
                alt=""></span></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-one_img-box p-r mb-40 wow fadeInLeft">
                    <img src="<?php echo base_url() ?>assets-farm/images/choose/visita-espacio-familiar-con-sana-diversion-moca.jpg"
                        class="choose-img_one" alt="">
                    <img src="<?php echo base_url() ?>assets-farm/images/choose/lugares-familiares-divertidos-en-moca-granja-jd-dominican.jpg"
                        class="choose-img_two" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-one_content-box pl-lg-70 mb-40">
                    <div class="section-title section-title-left mb-40 wow fadeInDown">
                        <span class="sub-title">Puntos a tomar en cuenta</span>
                        <h3>Somos un espacio Familiar con Sana Diversión</h3>
                    </div>
                    <div class="choose-item-list wow fadeInUp">
                        <div class="single-choose-item mb-30">
                            <div class="text">
                                <h5>Cuidemos el bienestar de lo nuestro </h5>
                                <p>
                                    <li>No es permitido fumar (sin excepciones)</li>
                                    <li>No se permite el consumo de bebidas alcohólicas</li>
                                    <li>Prohibido traer armas de fuego </li>
                                    <li>No se permite traer mascotas</li>
                                    <li>No permitimos el uso de vocabulario inapropiado u ofensivo</li>
                                </p>
                            </div>
                        </div>
                        <div class="single-choose-item mb-30">
                            <div class="text">
                                <h5>Otras consideraciones</h5>
                                <p>
                                    <li>Todos los niños menores de 12 años deben estar acompañados por un adulto mayor
                                        de 18 años</li>
                                    <li>JD Farm no se hace responsable de artículos extraviados o robados en nuestras
                                        instalaciones y parqueo</li>
                                </p>
                            </div>
                        </div>
                        <div class="single-choose-item mb-30">
                            <div class="text">
                                <h5>JD Dominican Farm</h5>
                                <p>
                                    <li>Se recomienda encarecidamente lavarse las manos antes y después de interactuar
                                        con nuestros animales</li>
                                    <li>Es posible que nuestro personal le capture en fotos o vídeos como parte de
                                        nuestras actividades promocionales</li>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="choose-button wow fadeInUp">
                        <a href="<?php echo base_url() ?>contacto"
                            class="main-btn bordered-btn bordered-yellow">Contactar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Why Choose Section ======-->
<!-- /CONTENIDO PRINCIPAL -->

<?php $this->endSection(); ?>