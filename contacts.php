<!DOCTYPE HTML>
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
        <script type="text/javascript" src="js/gSlider.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
        <!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
        <!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body id="page6">
        <!-- START PAGE SOURCE -->
        <div id="main">
            <header>
                <nav>
                    <ul>
                        <li><a href="index.php">About</a></li>
                        <li><a href="audio.php">Audio</a></li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                          <li><a href="tour-dates.php">Tour Dates</a></li>
                        <li class="active"><a href="contacts.php">Contacts</a></li>
                    </ul>
                </nav>
                <h1><a href="index.html">Vallenato en vivo</a></h1>
                <a href="#" class="hs-prev"></a> <a href="#" class="hs-next"></a> <a href="#" class="header-more"></a> </header>
            <article id="content">
                <div class="col-1">
                    <div class="p2">
                        <h2>New Album</h2>
                        <img src="images/descarga (2).jpg" width="190px" height="150px" class="p1" alt=""> <a href="audio.php" class="more">Read More</a></div>
                    <div class="p2">
                        <h2>New Video</h2>
                        <iframe width="190px" height="150px" src="https://www.youtube.com/embed/fOlUPt7PIy0" frameborder="0" allowfullscreen></iframe>
                        <div class="alc"><a href="video.html">More Videos</a></div>
                        <h2>Latest Photos</h2>
                        <a href="gallery.php"><img width="190px" height="150px" class="p1" src="images/images (2).jpg" alt=""></a>
                        <div class="alc"><a href="gallery.php">View Gallery</a></div>
                    </div>
                </div>
                <div class="col-2">
                    <h2>Contact Form</h2>
                    <form action="Control.php" id="form1" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <label>id_usuaurio:
                                <input name="id"type="text">
                            </label>
                            <label>Nombre:
                                <input name="Nombre"type="text">
                            </label>
                            <label>Email:
                                <input name="correo"type="email">
                            </label>
                            <label>Ciudad:
                                <input name="ciudad"type="text">
                            </label>
                            <label class="msg">Mensaje:
                                <textarea name="mensaje"></textarea>
                            </label>
                            <br><input  type="submit" name="Guardarc" id="Guardarc" value="save"><br>
                            <input  type="submit" name="cancel"id="cancel"value="cancel">
                        </fieldset>
                    </form>
                </div>
                <div class="col-3">
                    <h2>Mis Datos</h2>
                    <ul class="contacts blo">
                        <li><span>Pais:</span>Colombia</li>
                        <li><span>Ciudad:</span>Bogota</li>
                        <li><span>Telefono:</span>3015453030</li>
                        <li><span>Email:</span><a href="#">josembs1352@gmail.com</a></li>
                    </ul>
                    
                    <h2>Redes Sociales</h2>
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