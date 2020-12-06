    <div class="modal-form form-nuevo">
        <div class="formulario">
            <i class="material-icons cerrar">close</i>
            <h3>Nuevo gasto</h3>
            <form id="formAgregar">
                <label for="concepto">Concepto</label>
                <input type="text" name="concepto" id="concepto">
                <label for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" id="cantidad">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha">
                <button class="btnInsertar">Agregar</button>
            </form>
        </div>
    </div>
    <div class="modal-form form-editar">
        <div class="formulario">
            <i class="material-icons cerrar">close</i>
            <h3>Editar gasto</h3>
            <form id="formActualizar">
                <input type="text" hidden="" name="idGasto" id="idGasto">
                <label for="conceptoA">Concepto</label>
                <input type="text" name="conceptoA" id="conceptoA">
                <label for="cantidadA">Cantidad</label>
                <input type="text" name="cantidadA" id="cantidadA">
                <label for="fechaA">Fecha</label>
                <input type="date" name="fechaA" id="fechaA">
                <button class="btnActualizar">Actualizar</button>
            </form>
        </div>
    </div>

    <div class="modal-form form-eliminar">
        <div class="formulario">
            <h3>¿Seguro de eliminar este gasto?</h3>
            <button class="btn-eliminar" >Eliminar</button>
            <button class="cerrar">Cancelar</button>
        </div>
    </div>