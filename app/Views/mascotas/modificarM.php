<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
<div class="caja">
  <form action=" <?php echo base_url().'modificarM/hacerModificacion'?>" method="POST" enctype="multipart/form-data" class="formulario">



 <h2>Formulario de modificacion de datos de una Mascota</h2>

        <div class="campo">
            <label for="nombre">Nombre:</label>
        </div>
        <input type="text" id="nombre" placeholder="Nombre de la mascota" maxlength="30" name="nombre" value="<?= $existingMascota['nombre'] ?>" required>
        <span id="error" style="color: red; display: none;">El campo no puede contener más de 30 caracteres</span>


    <div class="campo-contenedor">

        <div class="campo">
            <label for="raza">Raza:</label>
        </div>
            <input type="text" id="raza"  placeholder="(ej. Perro, Bóxer)" maxlength="30" value="<?= $existingMascota['raza'] ?>"   name="raza" required>
            <span id="error" style="color: red; display: none;">El campo no puede contener más de 30 caracteres</span>
    

            <div class="campo">
            <label for="especie">Especie:</label>
        </div>
        <select id="especie" name="especie" required>
            <option value="" disabled selected>Seleccionar especie</option>
            <option value="Mamífero" <?php if ($existingMascota['especie'] === 'Mamífero') echo 'selected' ?>>Mamífero</option>
            <option value="Ave" <?php if ($existingMascota['especie'] === 'Ave') echo 'selected' ?>>Ave</option>
            <option value="Reptil" <?php if ($existingMascota['especie'] === 'Reptil') echo 'selected' ?>>Reptil</option>
            <option value="Rana/Sapo" <?php if ($existingMascota['especie'] === 'Rana/Sapo') echo 'selected' ?>>Rana/Sapo</option>
            <option value="Pez" <?php if ($existingMascota['especie'] === 'Pez') echo 'selected' ?>>Pez</option>
            <option value="Araña/Alacran" <?php if ($existingMascota['especie'] === 'Araña/Alacran') echo 'selected' ?>>Araña/Alacran</option>
            <option value="Insecto" <?php if ($existingMascota['especie'] === 'Insecto') echo 'selected' ?>>Insecto</option>
            <option value="otro" <?php if ($existingMascota['especie'] === 'otro') echo 'selected' ?>>otro</option>
        </select>

    
    </div>


    <div class="campo">
    <label for="sexo">Sexo:</label>
    </div>
    <select id="sexo" name="sexo" required>
    <option value="" disabled>Sexo de la mascota</option>
    <option value="macho" <?php if ($existingMascota['sexo'] === 'macho') echo 'selected' ?>>Macho</option>
    <option value="hembra" <?php if ($existingMascota['sexo'] === 'hembra') echo 'selected' ?>>Hembra</option>
    </select>

        
        
        

        <div class="campo">
        <label for="registro">N° de Registro:</label>
        </div>
        <input type="number" id="registro" placeholder="N° de registro de la mascota (5 dígitos: xxxxx)"  min="10000"   max="99999" value="<?= $existingMascota['nro_registro'] ?>" name="registro" required>
        <span id="error" style="color: red; display: none;"></span>

        <div class="campo">
        <label for="edad">Edad:</label>
        </div>
        <input type="text" id="edad" placeholder="meses/años" maxlength="10" value="<?= $existingMascota['edad'] ?>" name="edad" required>

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
  <h1 >MODIFICAR DATOS DE UNA MASCOTA</h1>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png" alt="Imagen">

  </div>
</div>
</div>

<?= $this->endSection() ?>