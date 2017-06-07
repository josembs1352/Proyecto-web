<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>El Origen Del Vallenato</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
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
        <!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
        <!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
        <!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body id="page3">
        <!-- START PAGE SOURCE -->
        <div id="main">
            <header>
                <nav>
                    <ul>
                        <li><a href="index.php">About</a></li>
                        <li><a href="audio.php">Audio</a></li>
                        <li class="active"><a href="video.php">Video</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="tour-dates.php">Tour Dates</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                    </ul>
                </nav>
                <h1><a href="index.html">CHURO DIAZ</a></h1>
                <div class="header-slider" align="center">
                    <button class="btn btn-info" data-toggle="modal" type="button" value="Ingresar-video" onclick="window.open('Ingresar-video.php', 'nuevaVentana', 'width=500, height=500')"><span class="glyphicon glyphicon-plus" ></span>Agregar Videos</button>
                </div>
                <a href="#" class="hs-prev"></a> <a href="#" class="hs-next"> <a href="#" class="header-more"></a> </header>
            <article id="content">
                <div class="col-1">
                    <div class="p2">
                        <h2>New Album</h2>
                        <img src="images/descarga (2).jpg" width="190px" height="150px" class="p1" alt=""> <a href="audio.php" class="more">Read More</a></div>
                    <div class="p2">
                        <h2>Latest Photos</h2>
                        <a href="gallery.html"><img width="190px" height="150px" class="p1" src="images/images.jpg" alt=""></a>
                        <div class="alc"><a href="gallery.php">View Gallery</a></div>
                    </div>
                </div>
                <div class="col-2">
                    <h2>Videos</h2>

<!--                        <thead>
       <tr>
           <th>Id Audio</th>
           <th>Id Usuario</th>
           <th>Nombre</th>
           <th>Formato</th>
           <th>Fecha Ingreso</th>
           <th>Audio</th>

       </tr>
   </thead>-->
                    <tbody>

                    <div id="rs">
                        <?php
                        require_once 'dataBase.php';
                        $db = new dataBase();
                        $db->conectar();
                        $rec = $db->consultar("video", "id_usuario", "id_usuario");
                        while ($row = mysqli_fetch_array($rec)) {
                            ?>
                        <video video src="<?php echo $row[4]; ?>" controls="controls "height="250 px" width="250 px"/>
                        <?php }
                        ?>

                    </div>
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
    })
</script>
<!-- END PAGE SOURCE -->
</body>
</html>