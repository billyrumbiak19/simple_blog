<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "simple_blog";

$koneksi = new mysqli($host, $username, $password, $db);

if($koneksi->connect_error) {
    die("Koneksi gagal : " . $koneksi->connect_error);
}