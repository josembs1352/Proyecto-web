<?php

session_start();
?>
<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "1234";
$db_name = "web_music";
$tbl_name = "usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}
if (isset($_POST['login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $administrador = 'Administrador';
    $sql = "SELECT * FROM $tbl_name WHERE correo = '$username'";
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($password == $row['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['id_usuario']=$row['id_usuario'];
            if ($row['tipoUsuario'] == $administrador) {
                header('Location: ZonaProvedores.php');
            } else {
                require 'index.php';
            }
        } else {
            echo "Correo electronico  o Contraseña estan incorrectos.";

            echo "<br><a href='index.php'>Volver a Intentarlo</a>";
        }
    }
}
?>
