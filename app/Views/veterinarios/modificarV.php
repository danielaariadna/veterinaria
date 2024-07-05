<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
  <div class="caja">
  <form action="<?php echo base_url().'modificarV/hacerModificacion'?>" method="POST" enctype="multipart/form-data" class="formulario">

  <h2>Formulario de modificación de Médico Veterinario</h2>

    <div class="campo">
    <label for="nombre">Nombre:</label>
    </div>
    <input type="text" id="nombre" placeholder="Nombre del médico veterinario" maxlength="20" value="<?= $existingVeterinario['nombre'] ?>"name="nombre" required>

    <div class="campo">
    <label for="apellido">Apellido:</label>
    </div>
    <input type="text" id="apellido" placeholder="Apellido del médico veterinario" value="<?= $existingVeterinario['apellido'] ?>" maxlength="20" name="apellido" required>

    <div class="campo">
    <label for="telefono">DNI:</label>
    </div>
    <input type="number" id="dni" placeholder="DNI del médico veterinario" max="99999999999999" value="<?= $existingVeterinario['dni'] ?>" name="dni" required>

    <div class="campo">
    <label for="especialidad">Especialidad:</label>
    </div>
    <select id="especialidad" name="especialidad" required>
    <option value="" disabled selected>Especialidad del médico veterinario</option>
    <option value="Cirugía" <?php if ($existingVeterinario['especialidad'] === 'Cirugía') echo 'selected' ?>>Cirugía</option>
    <option value="Oncología" <?php if ($existingVeterinario['especialidad'] === 'Oncología') echo 'selected' ?>>Oncología</option>
    <option value="Fauna Silvestre" <?php if ($existingVeterinario['especialidad'] === 'Fauna Silvestre') echo 'selected' ?>>Fauna Silvestre</option>
    <option value="Fisioterapia" <?php if ($existingVeterinario['especialidad'] === 'Fisioterapia') echo 'selected' ?>>Fisioterapia</option>
    <option value="Rehabilitación" <?php if ($existingVeterinario['especialidad'] === 'Rehabilitación') echo 'selected' ?>>Rehabilitación</option>
    <option value="Diagnóstico por imagen" <?php if ($existingVeterinario['especialidad'] === 'Diagnóstico por imagen') echo 'selected' ?>>Diagnóstico por imagen</option>
    </select>

 

    <div class="campo">
    <label for="telefono">Teléfono:</label>
    </div>
    <input type="number"placeholder="Teléfono personal del médico veterinario" max="99999999999999" id="telefono" value="<?= $existingVeterinario['telefono'] ?>" name="telefono" required>

    <div class="fechas-container">
        <div class="campo">
        <label for="fecha-alta">F/I:</label>
        </div>
        <input type="date" id="fecha-alta" value="<?= $existingVeterinario['fecha_ingreso'] ?>" name="fecha-alta" required>

        <div class="campo">
        <label for="fecha-alta">F/E:</label>
        </div>
        <input type="date" id="fecha_egreso" value="<?= $existingVeterinario['fecha_egreso'] ?>" name="fecha_egreso" >
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>

      <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success custom-success">
              <?= session()->getFlashdata('success') ?>
          </div>
      <?php endif; ?>
      <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger custom-error">
              <?= session()->getFlashdata('error') ?>
          </div>
      <?php endif; ?> 
  </form>


  </div>
  
</div>
<div class="container2">
  <div class="caja2">
  <h1 >MODIFICAR DATOS MÉDICO VETERINARIO</h1>
  <img src="https://veterinariapanda.com.ar/wp-content/uploads/2020/12/foto-10.png" alt="Imagen">

  </div>
</div>
</div>

<?= $this->endSection() ?>