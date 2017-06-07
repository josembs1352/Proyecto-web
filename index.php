<!DOCTYPE HTML>
<?php
session_start();

if (!empty($_POST['logout'])) {
    $_SESSION['prov_id'] = "";
    $_SESSION['prov_pass'] = "";

    session_destroy();
}

//if (empty($_SESSION['prov_id'])) {
//    header("Location:ingresoProveedores.php");
//}
?>
<html lang="en">
    <head>
        <title>El Origen Del Vallenato</title>
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
        <!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
        <!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
        <!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body id="page1">
        <!-- START PAGE SOURCE -->
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
                <div class="top-search-bar">
                <div class="header-top-nav">
                    <ul>
                        <li><a href="login.php" data-toggle="modal" data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>Login</a></li>
                        </ul>
                </div>
            </div>
                <div id="logoArea" class="navbar">
                    <div class="navbar-inner">
                        <form class="form-inline navbar-search" method="post" action="" >
                            <button type="submit" id="submitButton" class="btn btn-danger" style="align-items: flex-end" >Salir</button>
                        </form>
                    </div>
                </div>
                <h1><a href="index.php">Vallenato en vivo</a></h1>

                <a href="#" class="hs-prev"></a> <a href="#" class="hs-next"></a> <a href="#" class="header-more"></a> </header>
            <div class="tumbvr" height:100px width:50px>
                <div class="tumbvr-mask"></div>
                <ul>
                    <li><img src="images/descarga (1).jpg" alt=""></li>
                    <li><img src="artistas/Diomedes diaz.jpg" alt=""></li>
                    <li><img src="images/descarga (3).jpg" alt=""></li>
                    <li><img src="artistas/Silvestre dangond.jpg" alt=""></li>
                    <li><img src="images/descarga (5).jpg" alt=""></li>
                    <li><img src="artistas/Jhon mindiola.jpg" alt=""></li>
                    <li><img src="images/descarga.jpg" alt=""></li>
                    <li><img src="artistas/Jorge oñate.jpg" alt=""></li>
                    <li><img src="images/images (1).jpg" alt=""></li>

                </ul>
            </div>
            <article id="content">
                <div class="col-1">
                    <div class="p2">
                        <h2>New Album</h2>
                        <img src="images/descarga (2).jpg" width="190px" height="150px" class="p1" alt=""> <a href="audio.php" class="more">Read More</a></div>
                    <div class="p2">
                        <h2>New Video</h2>
                        <iframe width="190px" height="150px" src="https://www.youtube.com/embed/fOlUPt7PIy0" frameborder="0" allowfullscreen></iframe>
                        <div class="alc"><a href="video.html">More Videos</a></div>
                    </div>
                </div>
                <div class="col-2">
                    <!-- audio player begin -->
                    <div id="jplayer"></div>
                    <div class="jp-audio">
                        <h2>New Song</h2>
                        <div class="jp-type-single">
                            <div id="jp_interface_1" class="jp-interface">
                                <ul class="jp-controls">
                                    <li><a href="#" class="jp-play"></a></li>
                                    <li><a href="#" class="jp-pause"></a></li>
                                    <li><a href="#" class="jp-prev">Previous Track</a></li>
                                    <li><a href="#" class="jp-next">Next Track</a></li>
                                    <li><a href="#" class="jp-more-songs">Listen to More Songs</a></li>
                                </ul>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>
                                <div class="jp-title"></div>
                            </div>
                        </div>
                    </div>
                    <!-- audio player end -->
                    <h2 class="pl">Ultimas Giras</h2>
                    <div class="table-border">
                        <table class="dates" cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th>Id Tour</th>
                                    <th>Lugar</th>
                                    <th>Dia</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>

                                </tr>
                            </thead>
                            <tbody>
                            <div id="rs">
                                <div id="da">
                                    <?php
                                    require_once 'dataBase.php';
                                    $db = new dataBase();
                                    $db->conectar();
                                    $rec = $db->consultar("tour_date", "id_usuario", "id_usuario");
                                    while ($row = mysqli_fetch_array($rec)) {
                                        echo "<tr>";
                                        echo "<td >$row[0]</td>";
                                        echo "<td >$row[2]</td>";
                                        echo "<td >$row[3]</td>";
                                        echo "<td >$row[4]</td>";
                                        echo "<td >$row[5]</td>";
                                        echo "</tr>";
                                    }
                                    ?>

                                </div>
                            </div>
                        </table>
                    </div>
                </div>
                <div class="col-3">
                    <h2>Latest Tweets</h2>
                    <div class="und">
                        <p>Un Inédito Silvestre Dangond Llega A MÉxico<br>
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
                        <li><a href="#"><img src="images/facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="images/twitter.png" alt=""></a></li>
                        <li><a href="#"><img src="images/myspace.png" alt=""></a></li>
                        <li><a href="#"><img src="images/linkedin.png" alt=""></a></li>
                    </ul>
                </div>
            </article>
            <div class="af clear"></div>
        </div>
        <footer>
            <div class="footerlink" >
                <h1><a id="Zona">Zona Administrativa</a></h1>
                <br><button type="button" class="btn btn-primart btn-lg " onclick="window.open('login.php','width=500, height=500')">INGRESO</button>

            </div>
        </footer>
        <script type="text/javascript">Cufon.now()
            $(function () {
                $('nav,.more,.header-more').sprites()

                $('.header-slider').gSlider({
                    prevBu: '.hs-prev',
                    nextBu: '.hs-next'
                })
            })
            $(window).load(function () {
                $('.tumbvr')._fw({
                    tumbvr: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    }
                }).bind('click', function () {
                    location = "index-3.html"
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