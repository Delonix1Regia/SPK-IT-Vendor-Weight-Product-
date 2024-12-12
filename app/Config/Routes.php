<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home/viewkriteria', 'Home::viewkriteria');
$routes->get('/Home/viewvendor', 'Home::viewvendor');
$routes->get('/Home/viewbobot', 'Home::viewbobot');
$routes->get('/Home/viewpreferensi', 'Home::viewpreferensi');
$routes->get('/Home/viewnormalisasi', 'Home::viewnormalisasi');
$routes->get('/Home/viewpembobotan', 'Home::viewpembobotan');
$routes->get('/Home/viewranking', 'Home::viewranking');
$routes->get('/Home/viewvektor', 'Home::viewvektor');
$routes->get('/Home/viewpenilaian', 'Home::viewpenilaian');
$routes->get('/Home/formTambahBobot', 'Home::formTambahBobot'); // Menampilkan form tambah data bobot
$routes->post('/Home/tambahBobot', 'Home::tambahBobot'); // Proses tambah data bobot
$routes->get('/Home/editBobot/(:num)', 'Home::editBobot/$1'); // Menangani rute dengan parameter ID
$routes->post('/Home/updateBobot', 'Home::updateBobot'); // Proses update data bobot berdasarkan ID
$routes->get('/Home/hapusBobot', 'Home::hapusBobot'); // Proses hapus data bobot berdasarkan ID
$routes->get('/Home/formTambahKriteria', 'Home::formTambahKriteria');
$routes->post('/Home/tambahKriteria', 'Home::tambahKriteria');
$routes->get('/Home/editKriteria/(:num)', 'Home::editKriteria/$1');
$routes->post('/Home/updateKriteria/(:num)', 'Home::updateKriteria/$1');
$routes->get('/Home/hapusKriteria/(:num)', 'Home::hapusKriteria/$1');
$routes->get('/Home/formTambahVendor', 'Home::formTambahVendor'); // Menampilkan form tambah vendor
$routes->post('/Home/tambahVendor', 'Home::tambahVendor'); // Proses tambah vendor
$routes->get('/Home/editVendor/(:num)', 'Home::editVendor/$1'); // Menampilkan form edit vendor berdasarkan ID
$routes->post('/Home/updateVendor/(:num)', 'Home::updateVendor/$1'); // Proses update vendor berdasarkan ID
$routes->get('/Home/hapusVendor/(:num)', 'Home::hapusVendor/$1'); 