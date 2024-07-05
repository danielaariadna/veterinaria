<?= $this->extend('menu_principal') ?>

<?= $this->section('content') ?>
<div class="container-principal">
<div class="container">
    <div class="caja">
        <form action="<?php echo base_url('altaMascota/cargarMascota') ?>" method="POST" enctype="multipart/form-data" class="formulario">
            <h2>Formulario de Alta de Mascota</h2>

            <div class="campo">
                <label for="nombre">Nombre:</label>
            </div>
            <input type="text" id="nombre" placeholder="Nombre de la mascota" maxlength="30" pattern="[A-Za-z]+" name="nombre" value="<?= htmlspecialchars(old('nombre')) ?>" pattern="[A-Za-z]+" required>
            <span id="error" style="color: red; display: none;">El campo no puede contener más de 30 caracteres</span>

            <div class="campo-contenedor">
                <div class="campo">
                    <label for="raza">Raza:</label>
                </div>
                <input type="text" id="raza" placeholder="(ej. Perro, Bóxer)" pattern="[A-Za-z]+"  maxlength="30" name="raza" value="<?= old('raza') ?>" required>
                <span id="error" style="color: red; display: none;">El campo no puede contener más de 30 caracteres</span>

                <div class="campo">
                    <label for="especie">Especie:</label>
                </div>
                <select id="especie" name="especie" required>
                    <option value="" disabled selected>Seleccionar esp.</option>
                    <option value="Mamífero">Mamífero</option>
                    <option value="Ave">Ave</option>
                    <option value="Reptil">Reptil</option>
                    <option value="Rana/Sapo">Rana/Sapo</option>
                    <option value="Pez">Pez</option>
                    <option value="Araña/Alacran">Araña/Alacran</option>
                    <option value="Insecto">Insecto</option>
                    <option value="otro">otro</option>
                </select>
            </div>

            <div class="campo">
                <label for="sexo">Sexo:</label>
            </div>
            <select id="sexo" name="sexo" required>
                <option value="" disabled selected>Sexo de la mascota</option>
                <option value="macho">Macho</option>
                <option value="hembra">Hembra</option>
            </select>

            <div class="campo">
                <label for="registro">N° de Registro:</label>
            </div>
            <input type="number" id="registro" placeholder="5 dígitos - (xxxxx)" min="10000" max="99999" name="registro" value="<?= old('registro') ?>" required>
            <span id="error" style="color: red; display: none;">El nro. de registro es de 5 digitos</span>

            <div class="campo">
                <label for="edad">Edad:</label>
            </div>
            <input type="text" id="edad" placeholder="meses/años" maxlength="10" pattern="[0-9a-zA-Z ]+" name="edad" value="<?= old('edad') ?>" required>

            <div class="campo">
                <label for="fecha-alta">Fecha de Alta:</label>
            </div>
            <input type="date" id="fecha-alta" name="fecha-alta" value="<?= old('fecha-alta') ?>" required>

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
        <h1>NUEVA MASCOTA</h1>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png" alt="Imagen">
    </div>
</div>
</div>

<?= $this->endSection() ?>

