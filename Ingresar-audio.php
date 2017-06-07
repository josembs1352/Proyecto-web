<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/stil.css">
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
        <title>Jorge Ivan (El Churo Diaz) | Contacts</title>

    </head>
    <body id="page6">
        <h2>Audio</h2>
        <div align="center">
            <div class="formholder" align=""left>
                <form action="Control.php" enctype="multipart/form-data" method="post" id="form1">
                    <fieldset>
                        <label>id_usuario:
                            <input name="id_usuario"type="text">
                        </label>
                        <br><label>Nombre Cancion:
                            <input name="nombre" type="text">
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

        </article>
        <div class="af clear"></div>
    </div>



    <!-- END PAGE SOURCE -->
</body>
</html>



