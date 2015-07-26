<?php
error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
$server = "us-cdbr-iron-east-02.cleardb.net";
$username = "b67c482eab4854";
$password = "c79d499e";
$db = "heroku_5da25e9f877d6fc";
//$conn = new mysqli($server, $username, $password, $db);
//if ($conn->connect_error)
//    die($conn->connect_error);
//else
//    echo 'Conexion exitosa' . '<br>' . '<br>';
$conexion = mysql_connect($server, $username,$password);
mysql_select_db($db,$conexion);
session_start();
?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Famarxis</title>
        <link href="js/bootstrap2.min.css" rel="stylesheet">
        <script src="./Carousel Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>
        <link href="js/carousel.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <div class="navbar-wrapper">
            <div class="container">

                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container  ref">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Navegacion</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand ref" href="index.php" >INICIO</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse ref">
                            <ul class="nav navbar-nav ref">
                                <li><a href="quienes.php">Quienes Somos</a></li>
                                <li><a href="catalogo.php">Catalogo</a></li>
                                <li><a href="login.php">Comprar</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                <li data-target="#myCarousel" data-slide-to="4" class=""></li>
                <li data-target="#myCarousel" data-slide-to="5" class=""></li>
                <li data-target="#myCarousel" data-slide-to="6" class=""></li>
            </ol>

            <div class="carousel-inner imagej" role="listbox">
                <div class="item">
                    <img class="first-slide" src="img/1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <div class="item">
                    <img class="second-slide" src="img/2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <div class="item">
                    <img class="second-slide" src="img/3.jpg" alt="third slide">
                    <div class="container">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <div class="item">
                    <img class="second-slide" src="img/4.jpg" alt="fourth slide">
                    <div class="container">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <div class="item">
                    <img class="second-slide" src="img/5.jpg" alt="fifth slide">
                    <div class="container">
                        <div class="carousel-caption"></div>
                    </div>
                </div>


                <div class="item active">
                    <img class="third-slide" src="img/6.jpg" alt="sixth slide">
                    <div class="container">
                        <div class="carousel-caption"></div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">siguiente</span>
            </a>
        </div><!-- /.carousel -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row let">
                <div class="col-lg-4">
                    <img class="img-circle" src="img/c1.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Nuetra farmacia </h2>
                    <p>Permite que los usuarios puedan tener productos de calidad
                        para todas la personas sin excepcion , brindando un servicio de calidad</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="img/c2.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Nuestro lema</h2>
                    <p>El cliente es la prioridad</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="img/c3.jpg" width="140" height="140">
                    <h2>Servicio de Calidad</h2>
                    <p>Ven y disfruta de nuestros servicio de internet y calidad con nosotros </p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <hr class="featurette-divider">

            <div class="row featurette let">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Productos</h2>
                    <p class="lead">Los mejores precios
                        <br>Digestivos, Aalgesicos, vitaminas</p>
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette let">
                <div class="col-md-7">
                    <h2 class="featurette-heading">La mejor calidad</h2>
                    <p class="lead">La satisfacion del cliente es lo importante</p>
                </div>
            </div>
            <hr class="featurette-divider let">
            <footer>
                <p class="pull-right"><a href="https://www.facebook.com/asi.esfotepn?fref=ts">ASI-EPN</a></p>
                <p>Farmaxis. · <a href="http://esfot.epn.edu.ec/esfot30/">ESFOT</a> · <a href="http://www.epn.edu.ec/">EPN</a></p>
            </footer>
        </div><!-- /.container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="./Carousel Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>


    </body>
</html>