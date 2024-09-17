<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(TRUE);
$routes->get('/login', 'auth::index');
$routes->post('auth/attemptLogin', 'auth::attemptLogin');
$routes->get('auth/logout', 'auth::logout');

$routes->get('/buku', 'buku::index');
$routes->get('/buku/create', 'buku::create');
$routes->post('/buku/simpanan', 'buku::simpanan');
$routes->get('/buku/update(:num)', 'buku::update/$1');
$routes->post('/buku/edit(:num)', 'buku::edit/$1');
$routes->post('/buku/hapus(:num)', 'buku::hapus/$1');

$routes->get('/user', 'user::index');
$routes->get('/user/create', 'user::create');
$routes->post('/user/tambah', 'user::tambah');
$routes->get('/user/update(:num)', 'user::update/$1');
$routes->post('/user/edit(:num)', 'user::edit/$1');
$routes->get('/user/hapus/(:num)', 'user::hapus/$1');

$routes->get('/peminjaman', 'peminjaman::index');
$routes->get('/peminjaman/tambah', 'peminjaman::tambah');
$routes->post('/peminjaman/simpan', 'peminjaman::penyimpanan');
$routes->get('/peminjaman/edit/(:num)', 'peminjaman::edit/$1');
$routes->post('/peminjaman/update(:num)', 'peminjaman::update/$1');
$routes->get('/peminjaman/delete/(:num)', 'peminjaman::delete/$1');

$routes->get('/pengembalian', 'pengembalian::index');
$routes->get('/pengembalian/tambah/(:num)', 'pengembalian::tambah/$1');
$routes->post('/pengembalian/penyimpanan/(:num)', 'pengembalian::penyimpanan/$1');
$routes->get('/pengembalian/edit/(:num)', 'pengembalian::edit/$1');
$routes->post('/pengembalian/update(:num)', 'pengembalian::update/$1');
$routes->get('/pengembalian/delete/(:num)', 'pengembalian::delete/$1');