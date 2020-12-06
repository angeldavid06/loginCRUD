<?php 
    require_once "../clases/consultasGasto.php";
    $obj = new consultasGasto();
    $r = $obj->mostrarGastos();
?>
<table class="table" id="iddatatable">
    <thead>
        <tr>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th class="th-editar">Editar</th>
            <th class="th-eliminar">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($r as $m): ?>
            <tr>
                <td><?php echo $m['concepto'];?></td>
                <td><?php echo $m['cantidad'];?></td>
                <td><?php echo $m['fecha'];?></td> 
                <td style="text-align: center;">
                    <span class="editar" style="line-height: 0" onclick="formActualizar(<?php echo $m['id']?>)">
                        <span class="material-icons">edit</span>
                    </span>
                </td>
                <td style="text-align: center;">
                    <span style="line-height: 0" class="eliminar" onclick="eliminarDatos(<?php echo $m['id']?>)">
                        <span class="material-icons">close</span>
                    </span>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td>Concepto</td>
            <td>Cantidad</td>
            <td>Fecha</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </tfoot>
</table>
<script>
    $(document).ready(function() {
        $('#iddatatable').DataTable();
    });

    $('.editar').click(function() {
        $('.form-editar').addClass("abierto");
    });
    
    $('.cerrar').click(function() {
        $('.form-editar').removeClass("abierto");
    });
</script>