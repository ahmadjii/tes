<?php

include "koneksi.php";
$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM apotek WHERE id='$id'");

header("location:index.php?data=berhasil_dihapus");
