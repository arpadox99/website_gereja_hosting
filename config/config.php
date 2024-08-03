<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    //koneksi..
    $con = new PDO('mysql:host=127.0.0.1;dbname=u152600978_websitegereja', 'u152600978_website_gereja', 'G0dGrace33');
    //set.eror
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    //jika.ada.eror
    echo "Koneksi Gagal : " . $e->getMessage() . "<br>";
    die();
}
