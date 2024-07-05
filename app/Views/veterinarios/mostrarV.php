<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">

<div class="container">
<div class="caja">

    <form action="<?php echo base_url().'mostrarVeterinarios' ?>" method="POST" enctype="multipart/form-data" class="formulario">
    <h2>Datos de <?= $existingVeterinario['nombre'] ?> <?= $existingVeterinario['apellido'] ?> </h2>
        <input type="hidden" name="dni" value="<?= $existingVeterinario['dni'] ?>">

        <div class="campo">
        <label for="telefono">DNI:</label>
        </div>
        <input type="number" id="dni"  value="<?= $existingVeterinario['dni'] ?>" name="dni" readonly>

        <div class="campo">
        <label for="direccion">Especialidad:</label>
        </div>
        <input type="text"  value="<?= $existingVeterinario['especialidad'] ?>"  readonly>


        <div class="campo">
        <label for="telefono">Teléfono:</label>
        </div>
        <input type="number" id="telefono"  value="<?= $existingVeterinario['telefono'] ?>" name="telefono" readonly>

        
        <div class="campo">
        <label for="fecha-alta">Fecha de Ingreso:</label>
        </div>
        <input type="date" id="fecha-alta" name="fecha-alta" value="<?= $existingVeterinario['fecha_ingreso'] ?>" readonly>

        <div class="campo">
        <label for="fecha-alta">Fecha de Egreso:</label>
        </div>
        <input type="date"  value="<?= $existingVeterinario['fecha_egreso'] ?>" readonly>

    

        <button type="submit">OK</button>
    </form>

</div>


</div>

<div class="container2">
  <div class="caja2">
    <h1>Médico Veterinario:<br><?= $existingVeterinario['nombre']?><br> <?=$existingVeterinario['apellido'] ?></h1>
    <img src="https://veterinariapanda.com.ar/wp-content/uploads/2020/12/foto-10.png" alt="Imagen">
  </div>
</div>
</div>

<?= $this->endSection() ?>