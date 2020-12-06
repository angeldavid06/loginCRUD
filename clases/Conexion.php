<?php 
    class Conexion {
        public function Conectar () {
            $conexion = mysqli_connect(
                'localhost',
                'root',
                '',
                'gasto'
            );

            return $conexion;
        }
    }
?>