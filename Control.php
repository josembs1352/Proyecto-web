
<?php

session_start();
?>
<?php

header('Location: dataBase.php');

if (isset($_POST['enviar_Usuario'])) {
    $db = new dataBase();
    $db->conectar();
    $cliente = "Cliente";
    $db->insertar(array($_POST['cedula'], $_POST['nombre'], $_POST['apellidos'],
        $_POST['direccion'], $_POST['correo'], $_POST['password'], $cliente), "Usuario");
    header('Location: index.php');
}
if (isset($_POST['Guardarc'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array(0, $_POST['id'], $_POST['Nombre'], $_POST['correo'],
        $_POST['ciudad'], $_POST['mensaje']), "contacto");
    header('Location: ZonaProvedores.php');
}
if (isset($_POST['guardarTour'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array(0, $_POST['id_usuario'], $_POST['lugar'], $_POST['dia'],
        $_POST['fecha'], $_POST['hora']), "tour_date");
    header('Location: ZonaProvedores.php');
}
if (isset($_POST['comprarAudio'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array(0, $_SESSION['id_usuario'], $_POST['comprarAudio']), "carrito");
    header('Location: audio.php');
}
if (isset($_POST['save'])) {
    $db = new dataBase();
    $db->conectar();
    $Audio = $_FILES["audio"]["name"];
    $trozos = explode(".", $Audio);
    $exten = $_POST ['nombre'] . "." . end($trozos);
    $ruta = $_FILES["audio"]["tmp_name"];
    $destino = "audio/" . $Audio;
    $destino2 = "audio/" . $exten;
    copy($ruta, $destino);
    rename($destino, $destino2);
    $db->insertar(array(0, $_POST['id_usuario'], $_POST['artista'], $_POST['nombre'], $_POST['formato'],
        $_POST['fecha'], $destino2), "audio");
    header('Location: ZonaProvedores.php');
}

if (isset($_POST['guardar'])) {
    $db = new dataBase();
    $db->conectar();
    $img = $_FILES["imga"]["name"];
    $trozos = explode(".", $img);
    $exten = $_POST ['nombre'] . "." . end($trozos);
    $ruta = $_FILES["imga"]["tmp_name"];
    $destino = "images/" . $img;
    $destino2 = "images/" . $exten;
    copy($ruta, $destino);
    rename($destino, $destino2);
    $db->insertar(array(0, $_POST['id_usuario'], $_POST['nombre'],
        $_POST['fecha'], $destino2), "gallery");
    header('Location: ZonaProvedores.php');
}
if (isset($_POST['GuardarVideo'])) {
    $db = new dataBase();
    $db->conectar();
    $video = $_FILES["vid"]["name"];
    $trozos = explode(".", $video);
    $exten = $_POST ['nombre'] . "." . end($trozos);
    $ruta = $_FILES["vid"]["tmp_name"];
    $destino = "videos/" . $video;
    $destino2 = "videos/" . $exten;
    copy($ruta, $destino);
    rename($destino, $destino2);
    $db->insertar(array(0, $_POST['id_usuario'], $_POST['nombre'],
        $_POST['fecha'], $destino2), "video");
    header('Location: ZonaProvedores.php');
}
if (isset($_POST['cancion_C'])) {
    $db = new dataBase();
    $db->conectar();
    $id_carrito = $_POST['cancion_C'];
    $db->eliminarCarrito($id_carrito);
    header('Location: carrito.php');
}
?>

