<?php
class dataBase {

    private $usuario;
    private $contraseña;
    private $servidor;
    private $nomBD;

    function dataBase() {
        $this->usuario = "root";
        $this->contraseña = "1234";
        $this->servidor = "localhost";
        $this->nomBD = "web_music";
        $this->link = "";
    }

    function conectar() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->contraseña);
            mysqli_select_db($this->link,$this->nomBD);
    }
 
    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, "insert into " . $tabla . " values (" . $valoresFila . ");")or die(" la consulta fallo " . mysqli_error($this->link));
    }
    function consultar($tabla = "", $campo = "", $dato = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else if ($dato == "") {
            $query = "select " . $campo . " from " . $tabla;
        } else {
            $query = "select * from " . $tabla . " where " . $campo . " = " . $dato;
        }
        $res = mysqli_query($this->link, $query);

        return $res;
      
    }
        function eliminarCarrito($id_audio = "") {
        $eliminar = "delete from carrito where id_carrito='$id_audio'";
        mysqli_query($this->link, $eliminar)or die(" no se pudo eliminar" . mysqli_error($this->link));
    }

}
