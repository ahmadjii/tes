<?php

include "koneksi.php";

$kode_obat = $_POST["kode_obat"];
$nama_obat = $_POST["nama_obat"];
$jenis_obat = $_POST["jenis_obat"];
$deskripsi = $_POST["deskripsi"];
$harga_obat = $_POST["harga_obat"];
$stock = $_POST["stock"];

mysqli_query($koneksi, "INSERT INTO apotek(kode_obat,nama_obat,jenis_obat,deskripsi,harga_obat,stock) VALUES('$kode_obat','$nama_obat','$jenis_obat','$deskripsi','$harga_obat','$stock')");

header("location:index.php?data=berhasil_ditambah");
