<?php
    require '..\koneksi.php';

    $namapenyewa = $_POST["namapenyewa"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    $provinsi = $_POST["provinsi"];
    $kodepos = $_POST["kodepos"];
    $tgl_pinjam = $_POST["tgl_pinjam"];
    $tgl_kembali = $_POST["tgl_kembali"];
    $pilihambil = $_POST["pilihambil"];
    $metodebayar = $_POST["metodebayar"];
    $cardname = $_POST["cardname"];
    $cardnumber = $_POST["cardnumber"];
    $expmonth = $_POST["expmonth"];
    $expyear = $_POST["expyear"];
    $cvv = $_POST["cvv"];

    $query_sql = "INSERT INTO peminjaman (namapenyewa, alamat, kota,
        provinsi, kodepos, tgl_pinjam, tgl_kembali, pilihambil, 
        metodebayar, cardname, cardnumber, expmonth, expyear,
        cvv, jenismobil, hargamobil)
        VALUES ('$namapenyewa', '$alamat', '$kota', '$provinsi', 
        '$kodepos', '$tgl_pinjam', '$tgl_kembali', '$pilihambil', 
        '$metodebayar', '$cardname', '$cardnumber', '$expmonth',
        '$expyear', '$cvv', 'DUMP TRUCK', 10000000)";
    
    if(mysqli_query($koneksi_db, $query_sql)){
        echo ("<script languange ='JavaScript'>  
            window.alert('Pemesanan Anda akan diproses!');
            window.location='../sewa.html';
        </script>");
    }else{
        echo ("<script languange ='JavaScript'>  
            window.alert('Pemesanan Anda akan gagal! Silakan coba lagi!');
            window.location='codump.html';
        </script>");
    }
