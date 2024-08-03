<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $con = new PDO('mysql:host=localhost;dbname=u152600978_websitegereja', 'u152600978_website_gereja', 'G0dsGrace33');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil!";
} catch (Exception $e) {
    echo "Koneksi Gagal : " . $e->getMessage();
    die();
}
