<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">

<div class="container">
  <div class="caja">
    <form action="<?php echo base_url().'modificarA' ?>" method="POST" enctype="multipart/form-data" class="formulario">

      <h2>Ingrese los datos del adoptante</h2>

      <div class="campo">
        <label for="nombre">DNI del adoptante que desea modificar:</label> 
      </div>
      <input type="number" id="dni" placeholder="DNI del adoptante" max="99999999999999" name="dni" required>

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
    <h1>MODIFICAR DATOS </h1>
    <img src="https://funeralpets.com.ar/wp-content/uploads/2023/05/a.png" alt="Imagen">
  </div>
</div>
</div>

<?= $this->endSection() ?>