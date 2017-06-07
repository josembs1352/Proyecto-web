
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Jorge Ivan (El Churo Diaz)| Audio</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/cufon-replace.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/Josefin_Sans_600.font.js"></script>
        <script type="text/javascript" src="js/Lobster_400.font.js"></script>
        <script type="text/javascript" src="js/sprites.js"></script>
        <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="js/jquery.jplayer.settings.js"></script>
        <script type="text/javascript" src="js/gSlider.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

        <script src="/js/audio.min.js"></script>
        <!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
        <!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
        <!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body id="page2">
        <!-- START PAGE SOURCE -->
        <div id="main">
            <header>
                <nav>
                    <ul>
                        <li><a href="index.php">About</a></li>
                        <li class="active"><a href="audio.php">Audio</a></li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="tour-dates.php">Tour Dates</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                    </ul>
                </nav>
                <h1><a href="index.php">CHURO DIAZ</a></h1>
                <a href="#" class="hs-prev"></a> <a href="#" class="hs-next"></a> <a href="#" class="header-more"></a> </header>
            <article id="content">
                <div class="col-1">
                    <div class="p2">
                        <h2>New Album</h2>
                        <img src="images/descarga (2).jpg" width="190px" height="150px" class="p1" alt=""> <a href="audio.php" class="more">Read More</a></div>
                    <div class="p2">
                        <h2>New Video</h2>
                        <iframe width="190px" height="150px" src="https://www.youtube.com/embed/fOlUPt7PIy0" frameborder="0" allowfullscreen></iframe>
                        <div class="alc"><a href="video.php">More Videos</a></div>
                    </div>
                    <div class="p2">
                        <h2>Latest Photos</h2>
                        <a href="tour-dates.html"><img width="190px" height="150px" class="p1" src="images/descarga (5).jpg" alt=""></a>
                        <div class="alc"><a href="gallery.php">View Gallery</a></div>
                    </div>
                </div>
                <div class="col-2">
                    <h2 class="pl">Canciones </h2>
                    <section id="cart_items">
                        <div class="container">
                            <div class="table-responsive cart_info">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Numero de cancion </td>
                                            <td class="image">Nombre </td>
                                            <td class="image">Canción</td>
                                            <td class="image">Acción</td>

                                        </tr>
                                    </thead>
                                    <?php
                                    $id_artista = $_GET['$id_artista'];
                                    require_once 'dataBase.php';
                                    $db = new dataBase();
                                    $db->conectar();
                                    $rec = $db->consultar("audio", "id_artista", $id_artista);
                                    while ($row = mysqli_fetch_array($rec)) {
                                        $id_cancion = $row['0'];
                                        $nombre_cancion = $row['3'];
                                        $cancion = $row['6'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td class="cart_product">
                                                    <h4><?php echo $id_cancion ?></a></h4>
                                                </td>
                                                <td class="cart_description">
                                                    <h4><?php echo $nombre_cancion ?></a></h4>

                                                </td>
                                                <td class="cart_description">
                                                    <audio audio src="<?php echo $cancion; ?>" height="150 px" width="35 px" controls/>

                                                </td>
                                                <td class="cart_price">
                                                    <h4></h4>
                                                </td>


                                        <form id = "nuevoUsuario" method = "post" action = "Control.php" >
                                            <td class="cart_total">
                                                <button class="btn btn-danger btn-large" name="comprarAudio" value="<?php echo $id_cancion ?>"><span class = "glyphicon glyphicon-trash" aria-hidden = "true"></span> Agregar a carrito </button>
                                            </td>
                                        </form>

                                        </tr>


                                        </tbody>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </section> <!--/#cart_items-->
                </div>

                <div class="col-3">
                    <h2>Latest Tweets</h2>
                    <div class="und">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis.<br>
                            <a href="#">1 hour ago</a></p>
                        <p>Praesentium voluptatumdel enititque corrupti quos.<br>
                            <a href="#">3 hours ago</a></p>
                        <p>dolores et quas molestias excepturi sint occaecati cupiditate.<br>
                            <a href="#">7 hours ago</a></p>
                        <p>Non provident, similiqusunt in culpa qui officia.<br>
                            <a href="#">12 hours ago</a></p>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis.<br>
                            <a href="#">16 hours ago</a></p>
                    </div>
                    <h2>Newsletter</h2>
                    <form action="#" id="subscribe">
                        <fieldset>
                            <label>
                                <input type="text">
                            </label>
                            <input type="submit" value="">
                        </fieldset>
                    </form>
                    <h2>Find Me</h2>
                    <ul class="soc-ico">
                        <li><a href="https://www.facebook.com/jorgeivanchurodiaz?fref=ts"><img src="images/facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                        <li><a href="#"><img src="images/myspace.png" alt=""></a></li>
                        <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                    </ul>
                </div>
            </article>
            <div class="af clear"></div>
        </div>
        <footer>
            <div class="footerlink">
                <p class="lf">Copyright &copy; 2011 <a href="#">SiteName</a> - All Rights Reserved</p>
                <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
                <div style="clear:both;"></div>
            </div>
        </footer>
        <script type="text/javascript">Cufon.now()
            $(function () {
                $('nav,.more,.header-more').sprites()
                $('.header-slider').gSlider({
                    prevBu: '.hs-prev',
                    nextBu: '.hs-next'
                })
                $('a[rel=prettyPhoto]').each(function () {
                    var th = $(this),
                            pb
                    th.append(pb = $('<span class="playbutt"></span>').css({
                        opacity: .7
                    }))
                    pb.bind('mouseenter', function () {
                        $(this).stop().animate({
                            opacity: .9
                        })
                    }).bind('mouseleave', function () {
                        $(this).stop().animate({
                            opacity: .7
                        })
                    })
                }).prettyPhoto({
                    theme: 'dark_square'
                })
            })
        </script>
        <!-- END PAGE SOURCE -->
    </body>
</html>