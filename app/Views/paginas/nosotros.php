<?php

$this->setData([
    'title' => 'El lugar ideal para visitar con niños en Moca | JD Dominican Farm',
    'descripcion' => 'Te ofrecemos un espacio familiar con sana diversión y una increíble
         experiencia de vida en el campo. Acompañanos a pasarla bien en Moca.#RD #granjafamiliar',
]);

$this->extend('plantilla/layout');

?>

<?php echo $this->Section("cuerpo"); ?>

<!-- CONTENIDO PRINCIPAL -->
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1"
    style="background-image: url(<?php echo base_url() ?>assets-farm/images/bg/somos-granja-familiar-educativa-moca-1920x520.jpg);">
    <div class="brand-card text-center">
        <img src="<?php echo base_url() ?>assets-farm/images/icon/loro-128x167.jpg" alt="granja de aves en Moca">
        <h4>Nosotros</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="page-title">
                    <h1>JD Dominican Farm en Moca</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="<?php echo base_url() ?>">Inicio</a></li>
                        <li class="active">Nosotros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-Banner Section ======-->
<!--====== Start About Section ======-->
<section class="about-section p-r z-1 pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content-box content-box-gap mb-50">
                    <div class="section-title section-title-left wow fadeInUp mb-30">
                        <span class="sub-title">Quiénes somos</span>
                        <h2>Una Granja Familiar y Educativa</h2>
                    </div>
                    <p>Nos enorgullece ofrecer un ambiente cómodo,
                        seguro, saludable y divertido para los niños, animales y demás visitantes.
                    </p>
                    <p>Nos esforzamos por proteger y mejorar la vida de quienes nos rodean. Además,
                        trabajamos en estrecha colaboración con la comunidad local, para asegurarnos
                        de que nuestras operaciones sean responsables y respetuosas con el medio ambiente.
                    </p>
                    <div class="choose-item-list wow fadeInDown">
                        <div class="single-choose-item mb-30">
                            <div class="text">
                                <h5>Misión</h5>
                                <p>Nuestra misión es promover la importancia del cuidado de los animales, enseñar
                                    sobre su crianza, reproducción; fomentar el contacto con la naturaleza,
                                    los valores familiares y el disfrute de la vida en el campo.
                                </p>
                            </div>
                        </div>
                        <div class="single-choose-item mb-30">
                            <div class="text">
                                <h5>Visión</h5>
                                <p>Ser un lugar familiar donde pueda venir a visitarnos y tener la experiencia
                                    de la vida en el campo, conocer sobre las aves que criamos, su cuidado y
                                    reproducción, disfrutar de un ambiente de relajación, aire puro y diversión
                                    para toda la familia.
                                </p>
                            </div>
                        </div>
                        <div class="single-choose-item mb-30">
                            <div class="text">
                                <h5>Objetivos</h5>
                                <p>Nuestro mayor objetivo es educar a nuestros niños y jóvenes sobre la
                                    importancia del cuidado de los animalitos y la naturaleza.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-four_image-box text-right p-r mb-50 wow fadeInRight">
                    <img src="<?php echo base_url() ?>assets-farm/images/about/quienes-somos-granja-para-adultos-y-niños.jpg"
                        class="about-img_one" alt="granja-familiar-jd-dominican-farm">
                    <img src="<?php echo base_url() ?>assets-farm/images/about/granja-para-niños-en-republica-dominicana-360x355.jpg"
                        class="about-img_two" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End About Section ======-->
<!--====== Start Farmers Section ======-->
<section class="farmers-team_2 light-gray-bg pt-40 pb-40">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="section-title section-title-left mb-50 wow fadeInLeft">
                    <span class="sub-title">JD Dominican Farm </span>
                    <h2>Nuestro equipo</h2>
                </div>
            </div>
            <!-- empleados fila #1 -->
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chica-1-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Jornet</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInDown">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chica-2-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Mabel</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chico-1-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Pavel</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInDown">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chica-5-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Milka</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- empleados fila #2 -->
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chica-4-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Julia</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInDown">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chico-4-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Esmerlin</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/senora-1-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Awilda</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chica-3-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">María</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- empleados fila #3 -->
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chico-2-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Enmanuel</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInDown">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/senor-1-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Pedro</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/jovencito-2-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">Axiel</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="team-member_one text-center mb-40 wow fadeInDown">
                        <div class="member-img">
                            <img src="<?php echo base_url() ?>assets-farm/images/team/chica-6-175x233.jpg"
                                alt="emplado de JD Dominican Farm">
                        </div>
                        <div class="member-info">
                            <h3 class="title"><a href="farmers.html">María Estrella</a></h3>
                            <p class="position">...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Farmers Section ======-->
<!--====== Start Testimonial Section ======-->
<section class="testimonial-section pt-40">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10">
                <div class="section-title text-center mb-60 wow fadeInUp">
                    <span class="sub-title">Opiniones de nuestros visitantes </span>
                    <h4>Nos complace garantizar que todas y cada una de las familias que nos visitan
                        tengan una experiencia ¡maravillosa!</h4>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-one">
            <div class="testimonial-item text-center wow fadeInDown">
                <div class="author-thumb">
                    <img src="<?php echo base_url() ?>assets-farm/images/testimonial/opinion-de-clientes-feliz-granja-dominicana-jd-130x130.jpg"
                        alt="opiniones sobre JD Farm Moca">
                </div>
                <div class="testimonial-content">
                    <p>Excelente forma de pasa una mañana en familia. Tienen una variedad de aves muy interesante y
                        con
                        un pequeño tour educativo.
                        El personal es muy atento y servicial. Una muy buena experiencia. </p>
                    <div class="quote"><i class="fas fa-quote-right"></i></div>
                    <div class="author-title">
                        <h4>Rudy Matos</h4>
                        <p class="position"></p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center wow fadeInUp">
                <div class="author-thumb">
                    <img src="<?php echo base_url() ?>assets-farm/images/testimonial/jarol-tuleta-opinion-clientes-reseña-graja-jd-farm-130x130.jpg"
                        alt="JD Dominican Farm opiniones">
                </div>
                <div class="testimonial-content">
                    <p>Excelente lugar para ir en familia, muy colorido, personal muy amable
                        y atento, pendiente a todo. Gran variedad de aves para que los niños
                        y los adultos aprendan de los diferentes tipos..” </p>
                    <div class="quote"><i class="fas fa-quote-right"></i></div>
                    <div class="author-title">
                        <h4>Jarol Tuletta</h4>
                        <p class="position"></p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center wow fadeInDown">
                <div class="author-thumb">
                    <img src="<?php echo base_url() ?>assets-farm/images/testimonial/consuelo-clientes-feliz-resela-google-jg-farm-130x130.jpg"
                        alt="Reseñas de JD Dominican Farm">
                </div>
                <div class="testimonial-content">
                    <p>JD Dominican Farm es un lugar hermoso, con detalles únicos y con una gran variedad de aves,
                        el personal está altamente calificado para informarte sobre las especies que se encuentran
                        en el
                        lugar.
                    </p>
                    <div class="quote"><i class="fas fa-quote-right"></i></div>
                    <div class="author-title">
                        <h4>Consuelo Heva García</h4>
                        <p class="position"></p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center wow fadeInUp">
                <div class="author-thumb">
                    <img src="<?php echo base_url() ?>assets-farm/images/testimonial/reseña-clientes-granja-jd-manuel-moca-130x130.jpg"
                        alt="Granja en Moca opiniones">
                </div>
                <div class="testimonial-content">
                    <p>Excelente lugar para compartir y encontrarte con la naturaleza, hermoso lugar.
                        Muy atentos en sus servicios y explicaciones de cada animal en el lugar. </p>
                    <div class="quote"><i class="fas fa-quote-right"></i></div>
                    <div class="author-title">
                        <h4>Manuel Paulino</h4>
                        <p class="position"></p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item text-center wow fadeInDown">
                <div class="author-thumb">
                    <img src="<?php echo base_url() ?>assets-farm/images/testimonial/alexander-reseña-google-jdfarm-feliz-130x130.jpg"
                        alt="JD Dominican Farm opiniones">
                </div>
                <div class="testimonial-content">
                    <p>Excelente lugar con una gran variedad de especies de aves, perfecto para que los niños
                        conozcan distintas especies y la pasen bien </p>
                    <div class="quote"><i class="fas fa-quote-right"></i></div>
                    <div class="author-title">
                        <h4>Alexander De León</h4>
                        <p class="position"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Testimonial Section ======-->
<!-- /CONTENIDO PRINCIPAL -->

<?php $this->endSection(); ?>