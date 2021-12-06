 <!-- ---------------------------------
    INICIA HEADERSLIDER
    ---------------------------------- -->
    <?php 
        
        $detallesArticulo = new GestorArticulosControllers();
        $respuesta = $detallesArticulo->detalleArticulosFront();
        // var_dump($respuesta);
    
    ?>
 <div class="">

    <!-- ---------------------------------
    INICIA EL CONTENEDOR HERO
    ---------------------------------- -->

     <div class="hero-internas" style="background: linear-gradient(to top, rgba(41, 2, 63, 0.2), 
  rgba(41, 2, 63, 0.8)), url('<?=$respuesta->imagen?>') no-repeat center;" width="1110">
         <header class="header contenedor" id="header">
        <!-- ---------------------------------
        INICIA MENU
        ---------------------------------- -->
         <?php include "views/includes/menu.php"; ?>

         </header> <!-- termina el header-->
     </div> <!-- div de la imagen hero -->

 </div>
 <!-- termina la seccion del header slider -->
 
 <!-- ---------------------------------
        INICIA SECCION PRINCIPAL
    ---------------------------------- -->

<main class="container-interna ml-1 mr-1">
<h1><?php echo $respuesta->titulo; ?></h1>
<div class="row">
    <div class="col-8">
       <p>
           <?php echo $respuesta->contenido; ?>
       </p>
    </div>
</div>


</main> <!-- termina la seccion main o principal-->


<?php include "views/includes/footer.php"; ?>