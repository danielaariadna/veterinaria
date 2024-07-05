<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="title">
<h1>ADOPTANTES</h1>
<div class="search-panel">
        <form action="mostrarA" method="POST" enctype="multipart/form-data" class="formulario">
        <input type="number" id="dni" placeholder="DNI del adoptante" max="99999999999999" name="dni" required>
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
                <th>Apellido</th>
                <th>DNI</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Fecha de Alta</th>
             
            </tr>
        </thead>
        <tbody>
            <?php foreach ($amos as $amo): ?>
                <tr>
                    <td><?= $amo['nombre'] ?></td>
                    <td><?= $amo['apellido'] ?></td>
                    <td><?= $amo['dni'] ?></td>
                    <td><?= $amo['direccion'] ?></td>
                    <td><?= $amo['telefono'] ?></td>
                    <td><?= date('d/m/y', strtotime($amo['fecha_alta'])) ?></td>
          
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?> 