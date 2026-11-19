<?php
// Nama : Abdul Rosyid Al Khoerum
// NIM  : 250302002
// Kelas: TI - 2A

    //baris ini mematikannya agar kesalahan dapat diperiksa dengan if
    mysqli_report(MYSQLI_REPORT_OFF);

    //parameter koneksi
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_perpustakaan";

    //membuat koneksi
    $koneksi = mysqli_connect($host, $username, $password, $database);

    //memeriksa koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . htmlspecialchars(mysqli_connect_error()));
    }

    //karakter huruf & simbol tersimpan dengan benar
    mysqli_set_charset($koneksi, "utf8mb4");

?>