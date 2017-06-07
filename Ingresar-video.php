<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/stil.css">
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
        <title>Jorge Ivan (El Churo Diaz) | Contacts</title>

    </head>
    <body id="page6">
        <h2>Videos</h2>
        <div align="center">
             <div class="formholder" align=""left>
                <form action="Control.php" enctype="multipart/form-data" method="post" id="form1">
                    <fieldset>
                        <label>
                            <input name="id_usuario"type="text"placeholder="id_usuario">
                        </label>
                        <br><label>
                            <input name="nombre" type="text"placeholder="Nombre video">
                        <br><label>
                            <input name="fecha" type="date"placeholder="fecha">
                        </label>
                        <label for="archivo"></label>
                            <input type="file" name="vid" id="archivo" accept="video/*" value="seleccionar-image" required/>
                        </label><br>
                        <br><input  type="submit" name="GuardarVideo" id="GuardarVideo" value="GuardarVideo"><br>
                        <input  type="submit" name="cancel"id="cancel"value="cancel">
                    </fieldset>
                </form>
            </div>

        </article>
        <div class="af clear"></div>
    </div>



    <!-- END PAGE SOURCE -->
</body>
</html>







