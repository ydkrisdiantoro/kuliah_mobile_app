<?php
$connect = mysqli_connect("localhost", "root", "", "mobil_app");
date_default_timezone_set("Asia/Makassar");

$tanggal = date("Y-m-d H:i:s");
$jam = date("Y-m-d H:i:s");
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$pekerjaan = $_POST["pekerjaan"];

mysqli_query(
    $connect,
    "INSERT INTO 
    t_data(tanggal, jam, nama, alamat, pekerjaan)
    values('$tanggal','$jam','$nama','$alamat','$pekerjaan')"
);
