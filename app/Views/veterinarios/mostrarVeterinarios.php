<?= $this->extend('menu_principal') ?>


<?= $this->section('content') ?>
<div class="title">
<h1>VETERINARIOS</h1>
<div class="search-panel">
        <form action="mostrarV" method="POST" enctype="multipart/form-data" class="formulario">
        <input type="number" id="dni" placeholder="DNI del médico veterinario" max="99999999999" name="dni" required>
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
                <th>Especialidad</th> 
                <th>Teléfono</th>
                <th>Fecha de Ingreso</th>
                <th>Fecha de Egreso</th>
             
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veterinarios as $veterinario): ?>
                <tr>
                    <td><?=  $veterinario['nombre'] ?></td>
                    <td><?=  $veterinario['apellido'] ?></td>
                    <td><?=  $veterinario['dni'] ?></td>
                    <td><?=  $veterinario['especialidad'] ?></td>
                    <td><?=  $veterinario['telefono'] ?></td>
                    <td><?= date('d/m/y', strtotime($veterinario['fecha_ingreso'])) ?></td>
                    <td><?= $veterinario['fecha_egreso'] == '0000-00-00' ? '-' : date('d/m/y', strtotime($veterinario['fecha_egreso'])) ?></td>
          
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?> 