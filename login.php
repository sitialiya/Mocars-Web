<?php
    require 'koneksi.php';

    $username = $_POST["username"];
    $pass = $_POST["pass"];

    $query_sql = "SELECT * FROM users
        WHERE username = '$username' AND pass = '$pass'";

    $result = mysqli_query($koneksi_db, $query_sql);

    if(mysqli_num_rows($result)>0){
        header("location: sewa.html");
    }else{
        echo ("<script languange ='JavaScript'>  
            window.alert('Username atau pasword yang Anda masukkan salah!');
            window.location='login.html';
        </script>");
    }