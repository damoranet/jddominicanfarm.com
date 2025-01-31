<?php

$this->setData([
    'title' => 'Granja Familiar con actividades divertidas e interactivas en Moca | JD Dominican Farm',
    'descripcion' => 'JD Dominican Farm cuenta con actividades emocionantes, atractivas, un parque infantil para  niños,
         áreas al aire libre con vida silvestre, perfecto para paseos familiares, ubicado en Moca, a pocos minutos de Santiago y Santo Domingo. 
         #findesemana #Granjadivertida #moca',
]);

$this->extend('plantilla/layout');

?>

<?php echo $this->Section("cuerpo"); ?>

<!-- CONTENIDO PRINCIPAL -->
<!--====== Start Page-Banner Section ======-->
<section class="page-banner bg_cover position-relative z-1"
    style="background-image: url(<?php echo base_url() ?>assets-farm/images/bg/experiencia-aventuras-en-moca-que-hacer-en-moca.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="page-title">
                    <h1>Granja interactiva y divertida</h1>
                    <ul class="breadcrumbs-link">
                        <li><a href="<?php echo base_url() ?>">Inicio</a></li>
                        <li class="active">Experiencia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page-Banner Section ======-->
<!--====== Start Service Section ======-->
<section class="service-section pt-40 pb-40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title section-title-left mb-50 wow fadeInLeft">
                    <span class="sub-title">jD Dominican Farm </span>
                    <h2>Contamos con una gran variedad de Animales de granja y Aves exóticas</h2>
                </div>
            </div>
            <div class="col-lg-6 mb-50">
                <h3 class="wow fadeInRight">Aquí podrás encontrar:</h3>
                <div class="pt-20">
                    <li>Más de 20 especies de <strong>gallinas</strong> ornamentales</li>
                    <li>Diversas variedades de <strong>codornices</strong> (muy pocos comunes en el país)</li>
                    <li>Una gran variedad de <strong>faisanes</strong> exóticos</li>
                    <li><strong>Pavos reales</strong> en 6 diferentes variantes</li>
                    <li>Contamos con <strong>emúes</strong>, estos son las segundas aves más grandes despúes del avestruz
                        del avestruz.</li>
                    <li>Tenemos un voladero con aves de pico duro, en este encontrarás<strong> agapornis</strong> con sus diferentes
                        tonalidades, <strong>periquitos</strong> del amor, <strong>ring-necks</strong>,<strong>cacatúas<strong> y </strong>alondras</strong>. </li>
                    <li>En la granja contamos también con <stron>cabras enanas</strong>, <strong>patos</strong>, <strong>gansos</strong> y
                            <strong>conejos</strong> que te aseguramos que ¡no has visto esa variedad antes en el país!
                    </li>
                    <li>Y por último lo favorito de todos los niños, nuestros <strong>¡ponies</strong> y <strong> mini horses</strong>!</li>
                </div>
                </p>
            </div>
        </div>
    </div>
</section>
<!--====== End Service Section ======-->
<!--====== Start Portfolio Section ======-->
<section class="projects-section pt-40">
    <div class="container-fluid">
        <div class="row justify-content-center">
        </div>
        <div class="projects-slider-two">
            <div class="project-item-two wow fadeInUp">
                <div class="img-holder">
                    <img src="<?php echo base_url() ?>assets-farm/images/portfolio/granja-para-todas-las-edades-jd-dominica-farm.jpg" alt="">
                    <div class="hover-portfolio">
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h3 class="title"><a href="#">JD</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item-two wow fadeOutDown">
                <div class="img-holder">
                    <img src="<?php echo base_url() ?>assets-farm/images/portfolio/granja-zenon-jd-granja-en-moca.jpg"
                        alt="">
                    <div class="hover-portfolio">
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h3 class="title"><a href="#">Dominican</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item-two wow fadeInUp">
                <div class="img-holder">
                    <img src="<?php echo base_url() ?>assets-farm/images/portfolio/emu-ave-corredora-jd-dominican-farm.jpg"
                        alt="">
                    <div class="hover-portfolio">
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h3 class="title"><a href="#">Farm</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Portfolio Section ======-->
<!--====== Start Skill Section ======-->
<section class="skill-section-two pt-lg-130">
    <div class="container-fluid">
        <div class="skill-wrapper-one pb-90 bg_cover"
            style="background-image: url(<?php echo base_url() ?>assets-farm/images/bg/estanque-peces-koi-jd-dominican-farm.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="skill-two_content-box content-box-gap mb-40 wow fadeInUp">
                            <div class="section-title section-title-left mb-30">
                                <span class="sub-title">Más que una experiencia</span>
                                <h2>¡Visita nuestra granja en Moca!</h2>
                            </div>
                            <p>Descubre el mundo de los peces Koi. Tendrás la oportunidad de alimentarlos y apreciar sus vibrantes colores.
                                Vivirás una experiencia única.
                            </p>
                            <p>Aprenderás sobre las tradiciones del campo, el cuidado, crianza y reproducción de los animales que se encuentran en nuestra granja.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Skill Section ======-->
<!--====== Start Service Section ======-->
<section class="popular-service pt-40 pb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title">JD Dominican Farm</span>
                    <h2> Actividades</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="single-service-item mb-50 wow fadeInUp">
                    <div class="icon">
                        <img src="<?php echo base_url() ?>assets-farm/images/icon/tours-granja-dominican-farm.png" alt="Icon">
                    </div>
                    <div class="text">
                        <h3>Tours por nuestras instalaciones</h3>
                        <p>Conocerás todos nuestros animales y las diferentes áreas que tenemos, cada una con su historia
                        </p>
                    </div>
                </div>
                <div class="single-service-item mb-50 wow fadeInDown">
                    <div class="icon">
                        <img src="<?php echo base_url() ?>assets-farm/images/icon/aves-granja-dominican-farm.png" alt="Icon">
                    </div>
                    <div class="text">
                        <h3>Interacción animales</h3>
                        <p> Puedes alimentar, tocar y tomar hermosas fotos con nuestros animalitos
                        </p>
                    </div>
                </div>
                <div class="single-service-item mb-50 wow fadeInUp">
                    <div class="icon">
                        <img src="<?php echo base_url() ?>assets-farm/images/icon/granja-huevos-jd-farm.png" alt="Icon">
                    </div>
                    <div class="text">
                        <h3>Recolección de huevos</h3>
                        <p>Podrás recolectar huevos directamente de los nidos de las gallinas que tenemos designadas para ese propósito
                            ( sujeto a disponibilidad, pagarás los huevos que te lleves)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="img-holder mb-50 wow fadeInDown">
                    <img src="<?php echo base_url() ?>assets-farm/images/service/granja-educativa-en-moca-dominican-farm.jpg"
                        alt="Granja en Moca educativa para la familia dominicana">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service-item mb-50 card-rtl wow fadeInDown">
                    <div class="icon">
                        <img src="<?php echo base_url() ?>assets-farm/images/icon/fotos-en-granja-jd-dominican-farm.png" alt="Icon">
                    </div>
                    <div class="text">
                        <h3>Fotos</h3>
                        <p>Durante tu visita a la granja encontrarás espacios atractivos para ¡tomarte fotos increibles!
                        </p>
                    </div>
                </div>
                <div class="single-service-item mb-50 card-rtl wow fadeInUp">
                    <div class="icon">
                        <img src="<?php echo base_url() ?>assets-farm/images/icon/espacio-para-fotos.png" alt="Icon">
                    </div>
                    <div class="text">
                        <h3>Playground</h3>
                        <p>Contamos con áreas designadas para el disfrute y recreación de los más pequeños y juegos de mesa para adultos y
                            niños</p>
                    </div>
                </div>
                <div class="single-service-item mb-50 card-rtl wow fadeInDown">
                    <div class="icon">
                        <img src="<?php echo base_url() ?>assets-farm/images/icon/souvenirs-granja-jd-farm.png" alt="Icon">
                    </div>
                    <div class="text">
                        <h3>Tienda de Souvenirs</h3>
                        <p>Aquí encontrarás detalles para regalar o llevar a casa y recordar tu experiencia durante la visita a nuestra granja.
                            Contamos con servicio de cafetería por si gusta algún refrigerio o almorzar algo durante tu visita
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Service Section ======-->
<!--====== Start Portfolio Section ======-->
<section class="projects-section pt-40">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10">
                <div class="section-title text-center mb-60">
                    <span class="sub-title">JD Dominican Farm</span>
                    <h2>Creando recuerdos que duren para siempre</h2>
                </div>
            </div>
        </div>
        <div class="projects-slider-two">
            <div class="project-item-two wow fadeInUp">
                <div class="img-holder">
                    <img src="<?php echo base_url() ?>assets-farm/images/portfolio/creando-recuerdos-jd-dominican-farm.jpg"
                        alt="">
                    <div class="hover-portfolio">
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h3 class="title"><a href="#">Granja</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item-two wow fadeOutDown">
                <div class="img-holder">
                    <img src="<?php echo base_url() ?>assets-farm/images/portfolio/creando-recuerdos-granja-dominicana.jpg"
                        alt="">
                    <div class="hover-portfolio">
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h3 class="title"><a href="#">República Dominicana</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item-two wow fadeInUp">
                <div class="img-holder">
                    <img src="<?php echo base_url() ?>assets-farm/images/portfolio/granja-actividades-con-niños-en-moca.jpg"
                        alt="">
                    <div class="hover-portfolio">
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h3 class="title"><a href="#">Moca</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Portfolio Section ======-->
<!--====== Start Faq Section ======-->
<section class="faq-section pt-170 pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <div class="section-title text-center mb-70 wow fadeInUp">
                    <span class="sub-title">Preguntas frecuentes</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="faq-one_content-box wow fadeInDown">
                    <div class="accordion" id="accordionOne">
                        <div class="card mb-20">
                            <div class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse0" aria-expanded="true">
                                    ¿Qué es una granja familiar?
                                </a>
                            </div>
                            <div id="collapse0" class="collapse show" data-parent="#accordionOne">
                                <div class="card-body">
                                    <p>Una granja familiar es un lugar que brinda experiencias educativas tanto a niños
                                        como a adultos. Suelen ofrecer diversiones interactivas, como excursiones,
                                        paseos a caballo o en poni y otras actividades con animales. Algunas granjas
                                        también ofrecen eventos periódicos, como campamento,
                                        visitas escolares y pasadías con temáticas de temporadas
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-20">
                            <div class="card-header">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false">
                                    ¿Qué debe tener una granja educativa?
                                </a>
                            </div>
                            <div id="collapse1" class="collapse" data-parent="#accordionOne">
                                <div class="card-body">
                                    <p>
                                        <li>Animales: Aves,conejos,peces, gallinas, cabras, ovejas, etc.</li>
                                        <li>Zona didáctica: Talleres sobre los temas interesandos</li>
                                        <li>Programación educativa como: talleres, excursiones, prácticas y otros
                                            eventos eduacativos.
                                        </li>
                                        <li>Senderos para excursiones por la naturaleza y actividades de aprendizaje al
                                            aire libre.
                                        </li>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card mb-20">
                            <div class="card-header">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="false">
                                    ¿Cuáles son los beneficios de una Granja interactiva para niños?
                                </a>
                            </div>
                            <div id="collapse2" class="collapse" data-parent="#accordionOne">
                                <div class="card-body">
                                    <p>Una granja interactiva para niños es una herramienta educativa que puede
                                        utilizarse para ayudar a enseñar a los niños sobre la agricultura y
                                        los procesos agrícolas. A través de esta granja interactiva,
                                        los niños pueden aprender sobre diferentes animales
                                        de granja, cultivos y otros aspectos de la vida agrícola.</p>
                                    <br>
                                    <p>También puede proporcionar una experiencia práctica con animales reales,
                                        herramientas y otros materiales relacionados con la
                                        industria agrícola. Una granja interactiva puede incluir diversas actividades,
                                        como dar de comer a los animales, jugar a minijuegos
                                        relacionados con la agricultura o participar en tareas de cosecha simuladas.
                                        Este tipo de herramienta educativa ofrece a los niños una
                                        forma estupenda de conocer el importante papel que desempeñan los agricultores
                                        en nuestra sociedad y divertirse al mismo tiempo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-20">
                            <div class="card-header">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false">
                                    ¿Qué hacer en Moca con niños?
                                </a>
                            </div>
                            <div id="collapse3" class="collapse" data-parent="#accordionOne">
                                <div class="card-body">
                                    <p><strong>Visitar la Granja JD Dominican Farm en Moca</strong>: Es un lugar
                                        perfecto para llevar a los niños y disfrutar un día completo en familia,
                                        esta hermosa Granja, ubicada en la comunidad Cacique abajo en Moca, a sólo 10
                                        minutos del centro de la ciudad. Es el mejor lugar para que todos se
                                        diviertan. Aquí podrás:
                                    </p>
                                    <li>Pasar un día divertido al estilo campestre </li>
                                    <li>Darle de comer a los animalitos </li>
                                    <li>Compartir en familia</li>
                                    <li>Tirarte fotos en lugares bonitos </li>
                                    <li>Etcétera</li>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-20">
                            <div class="card-header">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse4"
                                    aria-expanded="false">
                                    ¿Qué aprenden los niños en la granja?
                                </a>
                            </div>
                            <div id="collapse4" class="collapse" data-parent="#accordionOne">
                                <div class="card-body">
                                    <p>Los niños están expuestos a una variedad de actividades en la granja que pueden
                                        enseñarles sobre la naturaleza,
                                        la responsabilidad y el amor por los animales.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-20">
                            <div class="card-header">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--====== End Faq Section ======-->
<!-- /CONTENIDO PRINCIPAL -->

<?php $this->endSection(); ?>