<?php
    require 'koneksi.php';

    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $nik = $_POST["nik"];
    $nohp = $_POST["nohp"];
    $ttlkota = $_POST["ttlkota"];
    $ttltgl = $_POST["ttltgl"];
    $alamatprov = $_POST["alamatprov"];
    $alamatkota = $_POST["alamatkota"];
    $alamatdetail = $_POST["alamatdetail"];

    $query_sql = "INSERT INTO users (username, pass, nik, nohp, 
                    ttlkota, ttltgl, alamatprov, alamatkota, alamatdetail)
                    VALUES ('$username', '$pass', '$nik', '$nohp', 
                    '$ttlkota', '$ttltgl', '$alamatprov', '$alamatkota', 
                    '$alamatdetail')";
    
    if(mysqli_query($koneksi_db, $query_sql)){
        header("location: login.html");
    }else{
        echo "Pendaftaran Anda gagal: ".mysqli_error($koneksi_db);
    }
