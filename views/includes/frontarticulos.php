<?php 

$leerArticulosFront = new GestorArticulosControllers();
$repuestaArticulos = $leerArticulosFront->leerFrontArticulosController();

// var_dump($repuestaArticulos);

?>


<section class="evento">
    <h2>Articulos</h2>
    <div class="contenedor-cards">

        <?php 

        foreach($repuestaArticulos as $articulo) :
        
        switch ($articulo->categoria) {
            case 'Noticias':
                echo '   <article class="card">
                <img src="'.$articulo->imagen.'" alt="">
                <div class="info">
                    <h6 class="categoria '.$articulo->categoria.'">'.$articulo->categoria.'</h6>
                    <h3 class="titulo">'.$articulo->titulo.'</h3>
                    <p class="precio">'.$articulo->contenido.' </p>
                </div>
            </article>';
                break;
                case 'Turismo':
                    echo '   <article class="card">
                    <img src="'.$articulo->imagen.'" alt="">
                    <div class="info">
                        <h6 class="categoria '.$articulo->categoria.'">'.$articulo->categoria.'</h6>
                        <h3 class="titulo">'.$articulo->titulo.'</h3>
                        <p class="precio">'.$articulo->contenido.' </p>
                    </div>
                </article>';
                    break;
                case 'Deportes':
                    echo '   <article class="card">
                    <img src="'.$articulo->imagen.'" alt="">
                    <div class="info">
                        <h6 class="categoria '.$articulo->categoria.'">'.$articulo->categoria.'</h6>
                        <h3 class="titulo">'.$articulo->titulo.'</h3>
                        <p class="precio">'.$articulo->contenido.' </p>
                    </div>
                </article>';
                        break;
                case 'Juegos':
                    echo '   <article class="card">
                    <img src="'.$articulo->imagen.'" alt="">
                    <div class="info">
                        <h6 class="categoria '.$articulo->categoria.'">'.$articulo->categoria.'</h6>
                        <h3 class="titulo">'.$articulo->titulo.'</h3>
                        <p class="precio">'.$articulo->contenido.' </p>
                    </div>
                </article>';
                     break;
                        
                      
            default:
                # code...
                break;
        }

    endforeach;
        
        ?>
     

        
       
    </div> <!-- div para card-->
</section>
<!--seccion evento-->