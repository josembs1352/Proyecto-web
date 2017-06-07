<!DOCTYPE html>
<?php
session_start();

if (!empty($_POST['logout'])) {
    $_SESSION['prov_id'] = "";
    $_SESSION['prov_pass'] = "";
    session_destroy();
    header('location: index.php');
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>El Origen Del Vallenato</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap style --> 
        <link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" media="screen"/>
        <link href="css/base.css" rel="stylesheet" media="screen"/>
        <link href="css/sti.css.css" rel="stylesheet"/>
        <!-- Bootstrap style responsive -->	
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <!-- Google-code-prettify -->	
        <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
        <style type="text/css" id="enject"></style>
    </head>
    <body>
        <div id="header">
            <div class="container">

                <!-- Navbar ================================================== -->
                <div id="logoArea" class="navbar">
                    <a href="index.php" target="_self">
                        <img src="Banner 15.jpg" alt="Inicio"/></a><br>
                    <div class="navbar-inner">
                        <form class="form-inline navbar-search" method="post" action="" >
                            <button type="submit" id="submitButton" class="btn btn-danger" style="align-items: flex-end" >Salir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="main">
            <header>
                <nav>
                    <ul>
                        <li class="active"><a href="index.php">About</a></li>
                        <li><a href="audio.php">Audio</a></li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="tour-dates.php">Tour Dates</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                    </ul>
                </nav>
                <h1><a href="index.php">Vallenato en vivo</a></h1>
            </header>
        </div>
        <!-- Header End====================================================================== -->
        <div id="mainBody">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="span11">
                            <ul id="productDetail" class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Ingresar Audios</a></li>
                                <li class="active"><a href="#IngresarVideo" data-toggle="tab">Ingresar Videos</a></li>
                                <li class="active"><a href="#IngresarFotos" data-toggle="tab">Ingresar Fotos</a></li>
                                <li class="active"><a href="#IngresarTour" data-toggle="tab">Ingresar Tours</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="registrarProducto">
                                    <h3> Ingresar Audios</h3>	
                                    <div class="well" id="home">
                                        <form action="Control.php" enctype="multipart/form-data" method="post" id="form1">
                                            <fieldset>
                                                <label>id_usuario:
                                                    <input name="id_usuario"type="text">
                                                </label>
                                                <br><label>Nombre Cancion:
                                                    <input name="nombre" type="text">
                                                    <br><select name = "artista" id = "artista" >
                                                        <option disabled selected hidden> Artista</option>
                                                        <?php
                                                        require_once 'dataBase.php';
                                                        $db = new dataBase();
                                                        $db->Conectar();
                                                        $res = $db->consultar("artista");
                                                        while ($row = mysqli_fetch_array($res)) {
                                                            $id_artista = $row['id_artista'];
                                                            $nombre_categori = $row['nombre'];
                                                            ?>
                                                            <option value="<?php echo $id_artista ?>"><?php echo $nombre_categori ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </label>
                                                <br><label>Formato:
                                                    <input name="formato" type="text">
                                                </label>
                                                <br><label>fecha de ingreso:
                                                    <input name="fecha" type="date">
                                                </label>
                                                <label for="archivo"></label>
                                                <input type="file" name="audio" id="archivo" accept="audio/*" value="seleccionar-audio" required/>
                                                </label><br>
                                                <br><input  type="submit" name="save" id="save" value="save"><br>
                                                <input  type="submit" name="cancel"id="cancel"value="cancel">
                                            </fieldset>
                                        </form>

                                    </div>


                                
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                </body>
                <!-- MainBody End ============================= -->
                <!-- Footer ================================================================== -->

                <!-- Placed at the end of the document so the pages load faster ============================================= -->
                <script src="themes/js/jquery.js" type="text/javascript"></script>
                <script src="js//bootstrap.min.js" type="text/javascript"></script>
                <script src="themes/js/google-code-prettify/prettify.js"></script>

                <script src="themes/js/bootshop.js"></script>
                <script src="themes/js/jquery.lightbox-0.5.js"></script>


                <span id="themesBtn"></span>
                </body>
                </html>

