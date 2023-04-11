<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "rentalmobil";
    //koneksi db "3307" supaya bisa koneksi (tanpa itu dia running di port lain dan gabisa koneksi)
    $koneksi_db = mysqli_connect($host, $username, $password, $database, "3307");

    if(!$koneksi_db){
        die("Maaf koneksi Anda gagal: ". mysqli_connect_error());
    }