<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//### INICIO #############################################
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
 
//### AMOS ###############################################
$routes->add('/altaAmo', 'amoController::altaAmos');
$routes->add('/modificarAmo', 'amoController::modificarAmos');
$routes->add('/mostrarAmos', 'amoController::mostrarAmos');
$routes->post('/altaAmo/cargarAmo', 'amoController::cargarAmo');
$routes->post('/modificarA', 'amoController::modificarAmo'); 
$routes->post('/modificarAmo/hacerModificacion', 'amoController::hacerModificacion');
$routes->post('/mostrarA', 'amoController::mostrarA');

//### MASCOTAS ###########################################
$routes->add('/altaMascota', 'mascotaController::altaMascota');
$routes->add('/modificarMascota', 'mascotaController::modificarMascota');
$routes->add('/mostrarMascotas', 'mascotaController::mostrarMascotas');
$routes->post('/altaMascota/cargarMascota', 'mascotaController::cargarMascota'); 
$routes->post('/modificarM', 'mascotaController::modificarMascotas'); 
$routes->post('/modificarM/hacerModificacion', 'mascotaController::hacerModificacion'); 
$routes->post('/mostrarM', 'mascotaController::mostrarM'); 

//### VETERINARIOS ########################################
$routes->add('/altaVeterinario', 'veterinarioController::altaVeterinario');
$routes->add('/bajaVeterinario', 'veterinarioController::bajaVeterinario');
$routes->add('/modificarVeterinario', 'veterinarioController::modificarVeterinario');
$routes->add('/mostrarVeterinarios', 'veterinarioController::mostrarVeterinarios');
$routes->post('/altaVeterinario/cargarVeterinario', 'veterinarioController::cargarVeterinario');
$routes->post('/bajaVeterinario/nuevaBaja', 'veterinarioController::nuevaBaja');
$routes->post('/modificarV', 'veterinarioController::modificarVeterinarios');
$routes->post('/modificarV/hacerModificacion', 'veterinarioController::hacerModificacion');
$routes->post('/mostrarV', 'veterinarioController::mostrarV');


//### ADOPCIONES ##########################################
$routes->add('/altaAdopcion', 'adopcionController::altaAdopcion');
$routes->add('/bajaAdopcion', 'adopcionController::bajaAdopcion');
$routes -> post('/altaAdopcion/cargarAdopcion', 'adopcionController::cargarAdopcion');
$routes -> post('/bajaAdopcion/nuevaBaja', 'adopcionController::nuevaBaja');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
