<?= $this->extend('menu_principal') ?> 

<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
  <div class="caja">
  <form action="<?php echo base_url().'altaVeterinario/cargarVeterinario'?>" method="POST" enctype="multipart/form-data" class="formulario">

  <h2>Formulario de Alta de Médico Veterinario</h2>

    <div class="campo">
    <label for="nombre">Nombre:</label>
    </div>
    <input type="text" id="nombre" placeholder="Nombre del médico veterinario" maxlength="20" name="nombre" pattern="[A-Za-z]+" required value="<?= htmlspecialchars(old('nombre')) ?>">

    <div class="campo">
    <label for="apellido">Apellido:</label>
    </div>
    <input type="text" id="apellido" placeholder="Apellido del médico veterinario" maxlength="20" name="apellido" pattern="[A-Za-z]+" required value="<?= htmlspecialchars(old('apellido')) ?>">

    <div class="campo">
    <label for="dni">DNI:</label>
    </div>
    <input type="number" id="dni" placeholder="DNI del médico veterinario" min="1000000" max="99999999" name="dni" required value="<?= old('dni') ?>">

    <div class="campo">
    <label for="especialidad">Especialidad:</label>
    </div>
    <select id="especialidad" name="especialidad" required>
      <option value="" disabled selected>Especialidad del médico veterinario</option>
      <option value="Cirugía" <?= (old('especialidad') === 'Cirugía') ? 'selected' : '' ?>>Cirugía</option>
      <option value="Oncología" <?= (old('especialidad') === 'Oncología') ? 'selected' : '' ?>>Oncología</option>
      <option value="Fauna Silvestre" <?= (old('especialidad') === 'Fauna Silvestre') ? 'selected' : '' ?>>Fauna Silvestre</option>
      <option value="Fisioterapia" <?= (old('especialidad') === 'Fisioterapia') ? 'selected' : '' ?>>Fisioterapia</option>
      <option value="Rehabilitación" <?= (old('especialidad') === 'Rehabilitación') ? 'selected' : '' ?>>Rehabilitación</option>
      <option value="Diagnóstico por imagen" <?= (old('especialidad') === 'Diagnóstico por imagen') ? 'selected' : '' ?>>Diagnóstico por imagen</option>
    </select>
 

    <div class="campo">
    <label for="telefono">Teléfono:</label>
    </div>
    <input type="tel" placeholder="Teléfono personal del médico veterinario" pattern="[0-9]{8,10}" id="telefono" name="telefono" required value="<?= old('telefono') ?>">

    <div class="campo">
    <label for="fecha-alta">Fecha de Ingreso:</label>
    </div>
    <input type="date" id="fecha-alta" name="fecha-alta" required value="<?= old('fecha-alta') ?>">

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
  <h1 >NUEVO MÉDICO VETERINARIO</h1>
  <img src="https://veterinariapanda.com.ar/wp-content/uploads/2020/12/foto-10.png" alt="Imagen">
  </div>
</div>
</div>

<?= $this->endSection() ?>


