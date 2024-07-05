<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
  <div class="caja">
  <form action="altaAdopcion/cargarAdopcion" method="POST" enctype="multipart/form-data" class="formulario">

  <h2>Formulario de Alta de Adopción</h2>
    <p> Datos del Adoptante</p> 
    <div class="campo">
    <label for="telefono">DNI:</label>
    </div>
    <input type="number" id="dni" placeholder="DNI del adoptante" max="99999999999999" name="dni" required >

    <p> Datos de la mascota</p>
    <div class="campo">
    <label for="registro">Nro. de registro de la mascota:</label>
    </div>
    <input type="number" id="registro" placeholder="5 dígitos - (xxxxx)"  max="99999" name="registro" required>
    <span id="error" style="color: red; display: none;">El nro. de registro es de 5 digitos</span>

    <div class="campo">
    <label for="fecha-alta">Fecha de adopción:</label>
    </div>
    <input type="date" id="fecha-alta" name="fecha-alta" required>


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
  <h1 >NUEVA ADOPCIÓN</h1>
  <img src="https://funeralpets.com.ar/wp-content/uploads/2023/05/a.png" alt="Imagen">

  </div>
</div>
</div>

<?= $this->endSection() ?>