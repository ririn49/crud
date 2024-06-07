<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/profil', 'Profil::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/tambah', 'Mahasiswa::create');
$routes->post('/mahasiswa/simpan', 'Mahasiswa::simpan');
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->get('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
