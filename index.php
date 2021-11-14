
<!-- ---------------------------------
INICIA CABECERA
---------------------------------- -->

<!DOCTYPE html>
<html lang="es-419">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="views/css/normalize.css">

    <!-- FontAwesome css -->

    <link rel="stylesheet" href="views/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/views/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->

    <script src="views/js/jquery.min.js"></script>    
    <script src="views/js/jquery.bxslider.min.js"></script>

    <!-- Cargamos los estilos de las librerias -->
    <link rel="stylesheet" href="views/css/owl.carousel.min.css">
    <link rel="stylesheet" href="views/css/lightbox.css">
    <link rel="stylesheet" href="views/css/jquery.bxslider.css">

   
    <!-- Cargamos nuestros propios estilo -->

    <link rel="stylesheet" href="views/css/estilos.css">
    <title>San Payo Tour</title>
</head>

<!-- termina la cabecera head -->

<!-- ---------------------------------
INICIA EL CUERPO
---------------------------------- -->
<body>

    <!-- ---------------------------------
    INICIA HEADERSLIDER
    ---------------------------------- -->

    <div class="headerslider">

        <!-- ---------------------------------
        INICIA SLIDER
        ---------------------------------- -->
        <div class="slider">
            <div>
                <img src="views/assets/slider/img1.JPG" alt="">
            </div>
            <div>
                <img src="views/assets/slider/img2.JPG" alt="">
            </div>
            <div>
                <img src="views/assets/slider/img3.JPG" alt="">
            </div>
        </div> <!-- termina el slider -->

       
        <!-- ---------------------------------
        INICIA EL CONTENEDOR HERO
        ---------------------------------- -->

        <div class="hero">
            <header class="header contenedor" id="header">

             <!-- ---------------------------------
            INICIA MENU
            ---------------------------------- -->

                <nav class="navbar">
                    <div class="logo nav-logo">
                        <img src="views/assets/logo.svg" alt="Logo san Payo tour operadora">
                    </div>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Lugares</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Comida</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Hoteles</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog de Viaje</a>
                        </li>
                    </ul>

                    <!-- este es el icono de barritas tipo hamburguesa -->

                    <div class="iconbar">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>

                </nav><!-- termna el navbar-->
         

            </header> <!-- termina el header-->

            <div class="contenido-hero contenedor">
                <h1>Conoce Nicaragua con Nosotros</h1>
                <form action="#" method="post">
                    <input type="text" name="busqueda" class="busqueda" placeholder="Encuentra un sitio...">
                    <input type="submit" value="Enviar">
                </form>
            </div><!-- termina el contenido hero-->

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

        <section class="evento">
            <h2>Eventos Nacionales</h2>
            <div class="contenedor-cards">
                <article class="card">
                    <img src="views/assets/actividades/ciclismo.jpg" alt="">
                    <div class="info">
                        <h6 class="categoria deporte">Deporte</h6>
                        <h3 class="titulo">Ciclismo de Montaña</h3>
                        <p class="precio"><span>Precio: </span>C$1200 c/u</p>
                    </div>
                </article>
                <article class="card">
                    <img src="views/assets/actividades/canopy.jpg" alt="">
                    <div class="info">
                        <h6 class="categoria juegos">Juegos</h6>
                        <h3 class="titulo">Canopy Tour Miravalle</h3>
                        <p class="precio"><span>Precio: </span>C$1200 c/u</p>
                    </div>
                </article>
                <article class="card">
                    <img src="views/assets/actividades/boarding.jpg" alt="">
                    <div class="info">
                        <h6 class="categoria deporte">Deporte</h6>
                        <h3 class="titulo">Boarding Cerro Negro</h3>
                        <p class="precio"><span>Precio: </span>C$1200 c/u</p>
                    </div>
                </article>
                <article class="card">
                    <img src="views/assets/actividades/concierto.jpeg" alt="">
                    <div class="info">
                        <h6 class="categoria eventos">Conciertos</h6>
                        <h3 class="titulo">Concierto en Rivas</h3>
                        <p class="precio"><span>Precio: </span>C$500 c/u</p>
                    </div>
                </article>
            </div> <!-- div para card-->
        </section>
        <!--seccion evento-->



        <!-- ---------------------------------
        INICIA SECCION BANNER
        ---------------------------------- -->

        <section class="banner">
            <h2>La ciudad Colonial de la Semana</h2>
            <div class="contenedor-cards especial" style="background: url('views/assets/banner/granada.jpg') no-repeat center top;">
                <div class="info">
                    <h3>Granada, La Gran Sultana</h3>
                    <p>
                        Lorem ipsum dolor sit amet.
                        Adipisci non perferendis quae nihil.
                        Voluptate optio ad consequuntur velit!
                    </p>
                    <a href="#" class="boton">Leer Articulo</a>
                </div>
            </div> <!-- cuadro interno banner-->
        </section>

        <!-- ---------------------------------
        INICIA SECCION  HOSPEDAJES
        ---------------------------------- -->

        <section class="hospedaje">
            <h2>Hospedajes</h2>
            <div class="contenedor-cards">
                <div class="card">
                    <img src="views/assets/hospedajes/hospedaje1.jpg">
                    <div class="star">
                        <h6>Clasificación:</h6>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                    </div>
                    <div class="info">
                        <h3 class="titulo">Hotel Alarcon</h3>
                        <p class="precio"><span>Desde:</span>C$500</p>
                    </div>
                </div>
                <!--.card-->
                <div class="card">
                    <img src="views/assets/hospedajes/hospedaje2.jpg">
                    <div class="star">
                        <h6>Clasificación:</h6>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                    </div>
                    <div class="info">
                        <h3 class="titulo">Hotel Alarcon</h3>
                        <p class="precio"><span>Desde:</span>C$500</p>
                    </div>
                </div>
                <!--.card-->
                <div class="card">
                    <img src="views/assets/hospedajes/hospedaje3.jpg">
                    <div class="star">
                        <h6>Clasificación:</h6>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                    </div>
                    <div class="info">
                        <h3 class="titulo">Hotel Alarcon</h3>
                        <p class="precio"><span>Desde:</span>C$500</p>
                    </div>
                </div>
                <!--.card-->
            </div>
            <!--.columnas4 cuadros-->
        </section>
        <!-- termina seccion hospedaje -->


        <!-- ---------------------------------
        INICIA SECCON DESTINOS
        ---------------------------------- -->

        <section class="destinos">
            <h2>Lugares más populares en Nicaragua</h2>
            <div class="contenedor-cards">
                <div class="card destinos">
                    <img src="views/assets/destinos/Puerto-Salvador-Allende-Managua.jpg">
                    <div class="info">
                        <h3 class="titulo">Salvador Allenden</h3>
                        <span>Managuas</span>
                    </div>
                </div>
                <!--.card-->
                <div class="card destinos">
                    <img src="views/assets/destinos/isletas.jpg">
                    <div class="info">
                        <h3 class="titulo">Isleta de Granada</h3>
                        <span>Granada</span>
                    </div>
                </div>
                <!--.card-->
                <div class="card destinos">
                    <img src="views/assets/destinos/volcan.jpg">
                    <div class="info">
                        <h3 class="titulo">Volcan Santiago</h3>
                        <span>Masaya</span>
                    </div>
                </div>
                <!--.card-->
                <div class="card destinos">
                    <img src="views/assets/destinos/ometepe.jpg">
                    <div class="info">
                        <h3 class="titulo">Isla de Ometepe</h3>
                        <span>Rivas</span>
                    </div>
                </div>
                <!--.card-->
            </div>
            <!--.columnas4 cuadros-->
        </section>
        <!-- termina la seccion de destinos -->

        
        <!-- ---------------------------------
        INICIA SECCION GALERIA
        ---------------------------------- -->


        <section class="galeria">
            <h2>Galeria de Imagenes</h2>
            <div class="owl-carousel contenedor-cards">
                <div class="card galerias item" >
                    <a href="views/assets/galeria/boarding1.jpg"  data-lightbox="roadtrip" data-title="Mi foto numero 1">
                        <img src="views/assets/galeria/boarding1.jpg">
                    </a>
                </div>
                <!--.card-->
                <div class="card galerias item">
                    <a href="views/assets/galeria/boarding2.jpg" data-lightbox="roadtrip" data-title="Mi foto numero 1">
                        <img src="views/assets/galeria/boarding2.jpg">
                    </a>
                </div>
                <!--.card-->
                <div class="card galerias item">
                    <a href="views/assets/galeria/ometepe1.jpg" data-lightbox="roadtrip" data-title="Mi foto numero 1">
                        <img src="views/assets/galeria/ometepe1.jpg">
                    </a>
                </div>
                <!--.card-->
            </div>
            <!--.columnas3 cuadros-->
        </section>
        <!-- termina la sección de galería -->


    </main> <!-- termina la seccion main o principal-->


    <!-- ---------------------------------
    INICIA EL PIE
    ---------------------------------- -->

    <footer id="footer" class="footer">
        <div class="contenedor">
            <div class="nav-footer">
                <img src="views/assets/logo.svg" alt="" class="img-fluid">
                <nav class="menu text">
                    <a href="#">Eventos</a>
                    <a href="#">Comida</a>
                    <a href="#">Registro</a>
                    <a href="#">Acceder</a>
                </nav>
            </div>

            <div class="nav-footer">
                <nav class="menu icono">
                    <ul>
                        <li>+505 0000-0000</li>
                        <li>sanpayotour@gmail.com</li>
                        <li>Ubicanos</li>
                    </ul>
                </nav>
            </div>

            <div class="nav-footer">
                <nav class="redes">
                    <ul>
                        <li class="fa fa-facebook-square"></li>
                        <li class="fa fa-twitter"></li>
                        <li class="fa fa-youtube"></li>
                    </ul>
                </nav>
            </div>

            <div class="nav-footer">
                <script>
                    var fecha = new Date();
                    var anio = fecha.getFullYear();

                </script>
                <p>Copyright ©
                    <script> document.write(anio);</script> San Payo Tour
                </p>
            </div>


        </div>
    </footer>   <!-- termina el footer -->

    <!-- ---------------------------------
    BOTON IR ARRIBA
    ---------------------------------- -->

    <a data-scroll href="#header" class="ir-arriba">
        <i class="fa fa-angle-up" aria-hidden="true">
        </i>
    </a>
    <!-- termina el boton de ir arriba -->


    <!-- libreria owlcarrusel -->
    <script src="views/js/owl.carousel.min.js"></script>
    <!-- libreria smothcroll -->
    <script src="views/js/smooth-scroll.min.js"></script>
    <!-- libreria lightbox -->
    <script src="views/js/lightbox.js"></script>
    <!-- nuestra propia libreria javascript -->
    <script src="views/js/init.js"></script>

</body><!-- termina el body -->
</html>

