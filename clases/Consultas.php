<?php
    require_once "Conexion.php";

    class Consultas extends Conexion {
        public function login ($datos) {
            $conexion = Conexion::Conectar();
            $password = sha1($datos[1]);
            
            $sql = "SELECT count(*) as total FROM t_usuarios WHERE usuario = '$datos[0]' AND password = '$password'";
            $result = mysqli_query($conexion,$sql);
            $cantidad = mysqli_fetch_array($result);
            
            if ($cantidad['total'] > 0) {
                $_SESSION['usuario'] = $datos[0];
            } 
            return $cantidad['total'];
        }

        public function insertarUsuarios ($datos) {
            $conexion = Conexion::Conectar();
            $password = sha1($datos[5]);
            $sql = "INSERT INTO t_usuarios (nombre,aPaterno,aMaterno,email,usuario,password) 
                    VALUES (
                        '$datos[0]',
                        '$datos[1]',
                        '$datos[2]',
                        '$datos[3]',
                        '$datos[4]',
                        '$password'
                    )";
            $result = mysqli_query($conexion,$sql);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        }
    }
?>