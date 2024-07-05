<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?> 
<div class="container-principal">

<div class="container">
<div class="caja">

    <form action="<?php echo base_url().'mostrarAmos' ?>" method="POST" enctype="multipart/form-data" class="formulario">
    <h2>Datos de <?= $existingAmo['nombre'] ?> <?= $existingAmo['apellido'] ?> </h2>
        <input type="hidden" name="dni" value="<?= $existingAmo['dni'] ?>">

        <div class="campo">
        <label for="direccion">Dirección:</label>
        </div>
        <input type="text" id="direccion" value="<?= $existingAmo['direccion'] ?>" name="direccion" readonly>

        <div class="m-cont">
        <div class="campo">
        <label for="telefono">Tel:</label>
        </div>
        <input type="number" id="telefono"  value="<?= $existingAmo['telefono'] ?>" name="telefono" readonly>

        
        <div class="campo">
        <label for="fecha-alta">F/A:</label>
        </div>
        <input type="date" id="fecha-alta" name="fecha-alta" value="<?= $existingAmo['fecha_alta'] ?>" readonly>
        </div>
        <div class="campo">
        <label for="adopciones-vigentes">Adopciones:</label>
        </div>
    <div class="table-containerA">
          
      <table class="table">
          <thead>
              <tr>
                  
                  <th>Mascota</th>
                  <th>N° R</th>
                  <th>F/Inicio</th>
                  <th>F/Fin</th>
                  <th>Motivo</th> 
          
               
              </tr>
          </thead>
          <tbody>
           <?php foreach ($existingAdopciones as $adopcion): ?>
                  <tr>
                      <td><?= $adopcion['nombre_mascota'] ?></td>
                      <td><?= $adopcion['registro_mascota'] ?></td>
                      <td><?= date('d/m/y', strtotime($adopcion['fecha_inicio'])) ?></td>
                      <td><?= $adopcion['fecha_fin'] == '0000-00-00' ? '-' : date('d/m/y', strtotime($adopcion['fecha_fin'])) ?></td>
                      <td><?= $adopcion['motivo']== '' ? '-' :$adopcion['motivo'] ?></td>
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
    <h1>Adoptante:<br><?= $existingAmo['nombre']?><br> <?=$existingAmo['apellido'] ?> </h1>
    <p> <br>DNI:  <?=$existingAmo['dni']?></p>
    <img src="https://www.maskotplace.com/wp-content/uploads/2023/04/nosotros-1-img.png" alt="Imagen">
  </div>
</div>
</div>

<?= $this->endSection() ?>