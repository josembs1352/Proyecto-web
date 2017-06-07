<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login</title>



        <link rel="stylesheet" href="css/sti.css">

        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>

        <div id="wrap">
            <div id="regbar">
                <div id="navthing">
                    <h2><a href="#" id="loginform">Login</a> | <a href="Nuevo-usuario.php">Register</a></h2>
                    <div class="login">
                        <div class="arrow-up"></div>
                        <div class="formholder">
                            <div class="randompad">
                                <form action ="conexion.php" method="post">
                                    <fieldset>
                                        <label>Email</label>
                                        <input type="email" name="email" required/>
                                        <label >Password</label>
                                        <input type="password" name="password" required/>
                                        <div class="g-recaptcha" data-sitekey="6LcIHh0UAAAAAOCyQMXQua21Kje2Bko0K1t_Ci2J"></div>
                                        <button name="login" id="login" value="1">Login</button>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    </body>
</html>