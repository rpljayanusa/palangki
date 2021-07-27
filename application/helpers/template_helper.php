<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('assets')) {
    function assets()
    {
        $link = base_url() . 'assets/adminlte/';
        return $link;
    }
}

if (!function_exists('assets_produk')) {
    function assets_produk()
    {
        $link = base_url() . 'assets/produk/';
        return $link;
    }
}