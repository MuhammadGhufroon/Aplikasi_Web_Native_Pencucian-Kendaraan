<?php
    $host     = "localhost";
    $username = "ghufroon";
    $password = "123";
    $database = "dbsteamkendaraan";
    $koneksi  = mysqli_connect($host, $username, $password, $database);

    if (! $koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>
