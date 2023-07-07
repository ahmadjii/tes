<?php

include "koneksi.php";

$id = $_POST['id'];
$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat'];
$jenis_obat = $_POST['jenis_obat'];
$deskripsi = $_POST['deskripsi'];
$harga_obat = $_POST['harga_obat'];
$stock = $_POST['stock'];

mysqli_query($koneksi, "UPDATE apotek SET kode_obat='$kode_obat', nama_obat='$nama_obat', jenis_obat='$jenis_obat', deskripsi='$deskripsi', harga_jual='$harga_jual', stock='$stock' WHERE id='$id'");

header("location:index.php?data=berhasil_diedit");
