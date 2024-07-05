<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
<div class="caja">

    <form action="<?php echo base_url().'mostrarMascotas' ?>" method="POST" enctype="multipart/form-data" class="formulario">
    <h2>Datos de <?= $existingMascota['nombre'] ?>  </h2>
        
        <div class="m-cont">
        <div class="campo">
        <label >Raza:</label>
        </div>
        <input type="text"   value="<?= $existingMascota['raza'] ?>"  readonly>

        <div class="campo">
        <label >Esp:</label>
        </div>
        <input type="text"  value="<?= $existingMascota['especie'] ?>" n readonly>
        </div>
        
        <div class="m-contm">

        <div class="campo">
        <label >Sexo:</label>
        </div>
        <input type="text"  value="<?= $existingMascota['sexo'] ?>" name="sexo" readonly>

        <div class="campo">
        <label for="telefono">Edad:</label>
        </div>
        <input type="text"  value="<?= $existingMascota['edad'] ?>" readonly>
        </div>

        <div class="fechas-container">
        <div class="campo">
        <label for="fecha-alta">F/A:</label>
        </div>
        <input type="date" id="fecha-alta" value="<?= $existingMascota['fecha_alta'] ?>" name="fecha-alta" readonly>

        <div class="campo">
        <label for="fecha-alta">F/D:</label>
        </div>
        <input type="date" id="fecha_egreso" value="<?= ($existingMascota['fecha_defuncion'] !== '0000-00-00') ? $existingMascota['fecha_defuncion'] : '-' ?>" name="fecha_egreso" readonly>
        </div>

        <div class="campo">
        <label for="telefono">Adopciones:</label>
        </div>

        <div class="table-containerM">
          
          <table class="table">
              <thead>
                  <tr>
                      <th>Adoptante</th>
                      <th>DNI</th>
                      <th>F/I</th>
                      <th>F/F</th> 
              
                   
                  </tr>
              </thead>
              <tbody>
              <?php foreach ($existingAdopciones as $adopcion): ?>
                      <tr>
                          <td><?= $adopcion['nombre_amo'] ?></td>
                          <td><?= $adopcion['dni_amo'] ?></td>
                          <td><?= date('d/m/y', strtotime($adopcion['fecha_inicio'])) ?></td>
                          <td><?= $adopcion['fecha_fin'] == '0000-00-00' ? '-' : date('d/m/y', strtotime($adopcion['fecha_fin'])) ?></td>
                        
                      </tr>
            <?php endforeach; ?>
              </tbody>
          </table>
      </div>





        <button type="submit">OK</button>
    </form>

</div>


</div>

<div class="container2">
  <div class="caja2">
    <h1>Mascota:<br> <?= $existingMascota['nombre']?><br> N°R: <?=$existingMascota['nro_registro'] ?></h1>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png" alt="Imagen">
  </div>
</div>
</div>

<?= $this->endSection() ?>