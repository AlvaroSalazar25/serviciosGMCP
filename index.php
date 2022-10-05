<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AdminController;
use Controllers\LoginController;
use Controllers\ServicioController;


$router = new Router();

//debuguear($_SERVER);
$router->get('/',[ServicioController::class,'index']);




$router->get('/edit',[AdminController::class,'editar']);
$router->post('/edit',[AdminController::class,'editar']);


// rutas del login
$router->get('/admin',[AdminController::class,'index']);
$router->get('/login',[LoginController::class,'login']);
$router->post('/login',[LoginController::class,'login']);
$router->get('/olvide',[LoginController::class,'olvide']);
$router->post('/olvide',[LoginController::class,'olvide']);
$router->get('/recuperar',[LoginController::class,'recuperar']);
$router->post('/recuperar',[LoginController::class,'recuperar']);
$router->get('/logout',[LoginController::class,'logout']);


//rutas protegidas para el uso de admin
$router->get('/servicios/index',[ServicioController::class,'ver']);
$router->get('/servicios/crear',[ServicioController::class,'crear']);
$router->post('/servicios/crear',[ServicioController::class,'crear']);
$router->get('/servicios/actualizar',[ServicioController::class,'actualizar']);
$router->post('/servicios/actualizar',[ServicioController::class,'actualizar']);
$router->post('/servicios/eliminar',[ServicioController::class,'eliminar']);
$router->post('/servicios/buscar',[ServicioController::class,'buscar']);


//rutas para
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();