<?= $this->extend('menu_principal') ?>

<?= $this->section('content') ?> 
<div class="container-principal">
<div class="container">
  <div class="caja">
    <form action="bajaAdopcion/nuevaBaja" method="POST" enctype="multipart/form-data" class="formulario">

      <h2>Formulario de Baja de Adopción</h2>
      <div class="campo">
        <label for="telefono">DNI del adoptante:</label>
      </div>
      <input type="number" id="dni" placeholder="DNI del adoptante" max="99999999999999" name="dni" required>
      <div class="campo">
        <label for="registro">Nro. de registro de la mascota:</label>
      </div>
      <input type="number" id="registro" placeholder="5 digitos - (xxxxx)" max="99999" name="registro" required>
      <span id="error" style="color: red; display: none;">El nro. de registro es de 5 digitos</span>

      <div class="campo">
        <label for="motivo">Motivo de baja:</label>
      </div>
      <select id="motivo" name="motivo" onchange="toggleFechaFields()" required>
        <option value="" disabled selected>Motivo de la baja</option>
        <option value="venta">Venta</option>
        <option value="fallecimiento">Fallecimiento</option>
      </select>

      <div class="campo">
        <label for="fecha-baja">Fecha de fallecimiento:</label>
      </div>
      <input type="date" id="fecha-baja" name="fecha-baja" required disabled>

      <div class="campo">
        <label for="fecha-fin">Fecha de venta:</label>
      </div>
      <input type="date" id="fecha-fin" name="fecha-fin" required disabled>

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
    <h1>BAJA DE ADOPCIÓN</h1>
    <img src="https://funeralpets.com.ar/wp-content/uploads/2023/05/a.png" alt="Imagen">
  </div>
</div>
</div>

<script>
  function toggleFechaFields() {
    var motivo = document.getElementById("motivo").value;
    var fechaBajaField = document.getElementById("fecha-baja");
    var fechaVentaField = document.getElementById("fecha-fin");

    if (motivo === "fallecimiento") {
      fechaBajaField.disabled = false;
      fechaVentaField.disabled = true;
    } else if (motivo === "venta") {
      fechaBajaField.disabled = true;
      fechaVentaField.disabled = false;
    } else {
      fechaBajaField.disabled = true;
      fechaVentaField.disabled = true;
    }
  }
</script>

<?= $this->endSection() ?>
