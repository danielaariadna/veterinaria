<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?> 
<div class="container-principal">

<div class="container">
<div class="caja">

    <form action="<?php echo base_url().'modificarAmo/hacerModificacion' ?>" method="POST" enctype="multipart/form-data" class="formulario">
    <h2>Datos del adoptante</h2>
        <input type="hidden" name="dni" value="<?= $existingAmo['dni'] ?>"> 

        <div class="campo">
            <label for="nombre">Nombre:</label> 
        </div>
        <input type="text" id="nombre" placeholder="Nombre del adoptante" name="nombre" maxlength="20" value="<?= $existingAmo['nombre'] ?>" required>

        <div class="campo">
            <label for="apellido">Apellido:</label> 
        </div>
        <input type="text" id="apellido" placeholder="Apellido del adoptante" name="apellido" maxlength="20" value="<?= $existingAmo['apellido'] ?>" required>

        <div class="campo">
        <label for="telefono">DNI:</label>
        </div>
        <input type="number" id="dni" placeholder="DNI del adoptante" max="99999999999999" value="<?= $existingAmo['dni'] ?>" name="dni" required>

        <div class="campo">
        <label for="direccion">Dirección:</label>
        </div>
        <input type="text" id="direccion" placeholder="Dirección del adoptante" maxlength="100" value="<?= $existingAmo['direccion'] ?>" name="direccion" required>


        <div class="campo">
        <label for="telefono">Teléfono:</label>
        </div>
        <input type="number" id="telefono" placeholder="Telefono del adoptante" max="99999999999999" value="<?= $existingAmo['telefono'] ?>" name="telefono" required>


        <div class="campo">
        <label for="fecha-alta">Fecha de Alta:</label>
        </div>
        <input type="date" id="fecha-alta" name="fecha-alta" value="<?= $existingAmo['fecha_alta'] ?>" required>

        <button type="submit">Guardar Cambios</button>
    </form>
</div>


</div>

<div class="container2">
  <div class="caja2">
    <h1>MODIFICAR DATOS DE UN ADOPTANTE</h1>
    <img src="https://funeralpets.com.ar/wp-content/uploads/2023/05/a.png" alt="Imagen">
  </div>
</div>
</div>

<?= $this->endSection() ?>