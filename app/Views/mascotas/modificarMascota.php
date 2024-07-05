<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
  <div class="caja">
  <form action=" <?php echo base_url().'modificarM'?>" method="POST" enctype="multipart/form-data" class="formulario">



 <h2>Ingrese los datos de la mascota</h2>

        <div class="campo">
        <label for="registro">N° de registro de la mascota:</label>
        </div>
        <input type="number" id="registro" placeholder="N° de registro de la mascota (5 digitos: xxxxx)"  max="99999" name="registro" required>
        <span id="error" style="color: red; display: none;">El nro. de registro es de 5 digitos</span>




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
  <h1 >MODIFICAR DATOS </h1>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png" alt="Imagen">

  </div>
</div>
</div>




<?= $this->endSection() ?> 