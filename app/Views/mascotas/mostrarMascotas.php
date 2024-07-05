<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="title">
<h1>MASCOTAS</h1>
<div class="search-panel">
        <form action="mostrarM" method="POST" enctype="multipart/form-data" class="formulario">
        <input type="number" id="registro" placeholder="N° de registro de la mascota (5 dígitos: xxxxx)" max="99999" name="registro" required>
            <button type="submit">Buscar</button>
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
<div class="table-container">
        
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Especie</th>
                <th>Sexo</th>
                <th>N° R</th>
                <th>Edad</th>
                <th>Fecha de Alta</th>
                <th>Fecha de Def.</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mascotas as $mascota): ?>
                <tr>
                    <td><?= $mascota['nombre'] ?></td>
                    <td><?= $mascota['raza'] ?></td>
                    <td><?= $mascota['especie'] ?></td>
                    <td><?= $mascota['sexo'] ?></td>
                    <td><?= $mascota['nro_registro'] ?></td>
                    <td><?= $mascota['edad'] ?></td>
                    <td><?= date('d/m/y', strtotime($mascota['fecha_alta'])) ?></td>
                    <td><?= $mascota['fecha_defuncion'] == '0000-00-00' ? '-' : date('d/m/y', strtotime($mascota['fecha_defuncion'])) ?></td> 
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>