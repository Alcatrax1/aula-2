<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/teste', 'Home::teste');

$routes->get('cadastro', 'AuthController::mostrarPaginaCadastro');

$routes->post('cadastro', 'AuthController::realizarCadastro');

$routes->get('login', 'AuthController::mostrarPaginaLogin');

$routes->post('login', 'AuthController::realizarLogin');

$routes->get('logout', 'AuthController::logout');

$routes->get('dashboard', 'Home::index');

$routes->get('form', 'Form::index');

$routes->post('form', 'Form::index');

$routes->get('tela', 'HomeController::index');

$routes->post('tela', 'HomeController::index');


$routes->get('/tela2', 'Tela2Controller::index'); 

$routes->get('/perfil', 'PerfilController::index'); 


$routes->get('/editar-perfil', 'PerfilController::editar'); 


$routes->get('/criar-evento', 'EventoController::criar'); 

$routes->get('/esportes', 'EsporteController::index'); 
$routes->get('/evento_esportivo/(:num)', 'EventoEsportivoController::visualizar/$1');


$routes->get('/confirmacao', 'ConfirmacaoController::index');



