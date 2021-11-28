<!-- ---------------------------------
    INICIA HEADERSLIDER
    ---------------------------------- -->

<div class="headerslider">

    <!-- ---------------------------------
        INICIA SLIDER
        ---------------------------------- -->
    <?php include "views/includes/fronslider.php"; ?>

    <!-- ---------------------------------
        INICIA EL CONTENEDOR HERO
        ---------------------------------- -->

    <div class="hero">
        <header class="header contenedor" id="header">

            <!-- ---------------------------------
            INICIA MENU
            ---------------------------------- -->

            <?php include "views/includes/menu.php"; ?>



        </header> <!-- termina el header-->

        <?php include "views/includes/buscador.php"; ?>


    </div> <!-- div de la imagen hero -->

</div>
<!-- termina la seccion del header slider -->



<!-- ---------------------------------
        INICIA SECCION PRINCIPAL
    ---------------------------------- -->

<main class="contenido contenedor ml-1 mr-1">

    <!-- ---------------------------------
        INICIA SECCION EVENTOS
        ---------------------------------- -->

    <?php include "views/includes/frontarticulos.php"; ?>


    <!-- ---------------------------------
        INICIA SECCION BANNER
        ---------------------------------- -->

    <?php include "views/includes/banner.php"; ?>


    <!-- ---------------------------------
        INICIA SECCION  HOSPEDAJES
        ---------------------------------- -->


    <?php include "views/includes/fronthospedaje.php"; ?>


    <!-- ---------------------------------
        INICIA SECCON DESTINOS
        ---------------------------------- -->



    <?php include "views/includes/frontdestinos.php"; ?>

    <!-- termina la seccion de destinos -->


    <!-- ---------------------------------
        INICIA SECCION GALERIA
        ---------------------------------- -->

    <?php include "views/includes/front.galeria.php"; ?>


    <!-- termina la sección de galería -->


</main> <!-- termina la seccion main o principal-->


<!-- ---------------------------------
    INICIA EL PIE
    ---------------------------------- -->

<?php include "views/includes/footer.php"; ?>