<?= $this->extend('menu_principal') ?>

<?= $this->section('content') ?>
<div class="container-principal">

<div class="container">
  <div class="caja">
    <form action="<?php echo base_url('altaAmo/cargarAmo') ?>" method="POST" enctype="multipart/form-data" class="formulario">
      <h2>Formulario de Alta de Adoptante</h2>

      <div class="campo">
        <label for="nombre">Nombre:</label> 
      </div>
      <input type="text" id="nombre" placeholder="Nombre del adoptante" maxlength="20" name="nombre" required pattern="[A-Za-z]+" value="<?= htmlspecialchars(old('nombre')) ?>">

      <div class="campo">
        <label for="apellido">Apellido:</label>
      </div>
      <input type="text" id="apellido" placeholder="Apellido del adoptante" maxlength="20" name="apellido" required pattern="[A-Za-z]+" value="<?= htmlspecialchars(old('apellido')) ?>">

      <div class="campo">
        <label for="dni">DNI:</label>
      </div>
      <input type="number" id="dni" placeholder="DNI del adoptante" min="1000000" max="99999999" name="dni" required value="<?= old('dni') ?>">

      <div class="campo">
        <label for="direccion">Dirección:</label>
      </div>
      <input type="text" id="direccion" placeholder="Dirección del adoptante" maxlength="100" name="direccion" required value="<?= old('direccion') ?>">

      <div class="campo">
        <label for="telefono">Teléfono:</label>
      </div>
      <input type="tel" id="telefono" placeholder="Teléfono del adoptante" pattern="[0-9]{8,10}" name="telefono" required value="<?= old('telefono') ?>">

      <div class="campo">
        <label for="fecha-alta">Fecha de Alta:</label>
      </div>
      <input type="date" id="fecha-alta" name="fecha-alta" required value="<?= old('fecha-alta') ?>">

      <button type="submit">Enviar</button>

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
    <h1>NUEVO ADOPTANTE</h1>
    <img src="https://funeralpets.com.ar/wp-content/uploads/2023/05/a.png" alt="Imagen">
  </div>
</div>
</div>

<?= $this->endSection() ?>

