<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['user/delete/(:any)'] = 'user/delete/$1';
$route['user/update/(:any)'] = 'user/update/$1';
$route['user'] = 'user';
$route['user/tambah'] = 'user/tambah';
$route['registrasi'] = 'user/registrasi';

$route['bahan/delete/(:any)'] = 'bahan/delete/$1';
$route['bahan/update/(:any)'] = 'bahan/update/$1';
$route['bahan'] = 'bahan';
$route['bahan/tambah'] = 'bahan/tambah';

$route['pembayaran/tambah/(:any)'] = 'pembayaran/tambah/$1';
$route['pembayaran/delete/(:any)'] = 'pembayaran/delete/$1';
$route['pembayaran/update/(:any)'] = 'pembayaran/update/$1';
$route['pembayaran/kwitansi'] = 'pembayaran/kwitansi';
$route['pembayaran'] = 'pembayaran';
$route['kwitansi-pembayaran'] = 'pembayaran/pelanggan_kwitansi';
$route['riwayat-pembayaran'] = 'pembayaran/pelanggan';

$route['produk/pesan/(:any)'] = 'produk/pesan/$1';
$route['produk/delete/(:any)'] = 'produk/delete/$1';
$route['produk/update/(:any)'] = 'produk/update/$1';
$route['produk'] = 'produk';
$route['produk/tambah'] = 'produk/tambah';

$route['pemesanan/delete/(:any)'] = 'pemesanan/delete/$1';
$route['pemesanan/update/(:any)'] = 'pemesanan/update/$1';
$route['pemesanan'] = 'pemesanan';

$route['pelanggan'] = 'laporan/pelanggan';
$route['pelanggan/cetak'] = 'laporan/pelanggan_cetak';

$route['pesanan'] = 'laporan/pesanan';
$route['pesanan/tanggal'] = 'laporan/tanggal';
$route['pesanan/tanggal/cetak'] = 'laporan/tanggal_cetak';
$route['pesanan/bulan'] = 'laporan/bulan';
$route['pesanan/bulan/cetak'] = 'laporan/bulan_cetak';
$route['pesanan/tahun'] = 'laporan/tahun';
$route['pesanan/tahun/cetak'] = 'laporan/tahun_cetak';

$route['home'] = 'home';

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
