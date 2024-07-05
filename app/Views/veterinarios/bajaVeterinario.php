<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
  <div class="caja">
  <form action="<?php echo base_url().'bajaVeterinario/nuevaBaja'?>" method="POST" enctype="multipart/form-data" class="formulario">
 
  <h2>Formulario de Baja de Médico Veterinario</h2>

    <div class="campo">
    <label for="dni">DNI:</label>
    </div>
    <input type="number" id="dni" placeholder="DNI del médico veterinario" max="99999999999999" name="dni" required>

    <div class="campo">
    <label for="fecha-baja">Fecha de fin de la relación contractual:</label>
    </div>
    <input type="date" id="fecha-baja" name="fecha-baja" required>


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
  <h1 >BAJA DE MÉDICO VETERINARIO</h1>
  <img src="https://veterinariapanda.com.ar/wp-content/uploads/2020/12/foto-10.png" alt="Imagen">

  </div>
</div>
</div>

<?= $this->endSection() ?>