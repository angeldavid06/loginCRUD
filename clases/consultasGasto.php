<?php
    require_once "Conexion.php";

    class consultasGasto extends Conexion {
        public function mostrarGastos () {
            $conexion = Conexion::Conectar();

            $sql = "SELECT * FROM t_gastos";
            $result = mysqli_query($conexion,$sql);
            return $result;
        }
        
        public function nuevoGasto ($datos) {
            $conexion = Conexion::Conectar();
            $sql = "INSERT INTO t_gastos (concepto,cantidad,fecha) VALUES ('$datos[0]','$datos[1]','$datos[2]')";
            $result = mysqli_query($conexion,$sql);
            return $result;
        }

        public function eliminarGasto ($id) {
            $conexion = Conexion::Conectar();
            $sql = "DELETE FROM t_gastos WHERE id = '$id'";

            $result = mysqli_query($conexion,$sql);
            return $result;
        }

        public function obtenerGasto ($id) {
            $conexion = Conexion::Conectar();

            $sql = "SELECT * FROM t_gastos WHERE id = '$id'";
            $result = mysqli_query($conexion,$sql);
            $ver = mysqli_fetch_row($result);
            $datos = array (
                'id' => $ver[0],
                'concepto' => $ver[1],
                'cantidad' => $ver[2],
                'fecha' => $ver[3]
            );
            return $datos;
        }

        public function actualizarGasto ($datos) {
            $conexion = Conexion::Conectar();

            $sql = "UPDATE t_gastos 
                    SET concepto = '$datos[1]', cantidad = '$datos[2]', fecha = '$datos[3]' 
                    WHERE id = '$datos[0]'";
            $result = mysqli_query($conexion,$sql);

            return $result;
        }
    }
?>