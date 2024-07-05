<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MI VETERINARIA</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link rel="stylesheet" href="assets/css/styles.css">

    <style>
      
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
    </style>

</head>
<body>
<header class="header">
    
   
 
    <div class="logo">
        <img  src="assets/images/logom.png" alt="Logo">
    </div>

  
    <nav>
        <ul class="nav-links">
            <li><a href="home">Inicio</a></li>
            <li>
                <a href="">Adopciones</a>
                <ul class="submenu">
                    <li><a href="altaAdopcion">Nueva Adopción</a></li>
                </ul>
            </li>
            <li>
                <a href="">Altas</a>
                <ul class="submenu">
                    <li><a href="altaMascota">Mascotas</a></li>
                    <li><a href="altaAmo">Adoptantes</a></li>
                    <li><a href="altaVeterinario">Veterinarios</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="">Bajas</a>
                <ul class="submenu">
                    <li><a href="bajaAdopcion">Adopciones</a></li>
                    <li><a href="bajaVeterinario">Veterinarios</a></li>
                </ul>
            </li>
            <li>
                <a href="">Modificar</a>
                <ul class="submenu">
                    <li><a href="modificarMascota">Mascotas</a></li>
                    <li><a href="modificarAmo">Adoptantes</a></li>
                    <li><a href="modificarVeterinario">Veterinarios</a></li>
                </ul>
            </li>
            <li>
                <a href="">Mostrar</a>
                <ul class="submenu">
                    <li><a href="mostrarMascotas">Mascotas</a></li>
                    <li><a href="mostrarAmos">Adoptantes</a></li>
                    <li><a href="mostrarVeterinarios">Veterinarios</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
</header>
    
    <div class="panel">
        <?= $this->renderSection('content') ?>
    </div>
    <footer class="footer">
   
        <label>Copyright © MiVeterinaria since 2023 </label>
        <label>Morales Daniela Ariadna </label>
        <label>Mail: danielaariadnamorales@gmail.com </label>
   
</footer>
<script src= "assets/js/main.js" > </script>
</body>
</html>