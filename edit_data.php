<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Apotek</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fontawesome/all.css">

    <script src="js/fontawesome/js/all.js"></script>
</head>

<body>

    <div class="navbar">
        <div class="logo">
            <span><strong>DATA </strong>Apotek</span>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="#">KELOMPOK 9</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <div class="header">
            <div class="back">
                <a href="../crud/"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="title">
                <span>Edit Data Obat</span>
            </div>
        </div>

        <form action="edit.php" method="post">
            <div class="form">
                <div class="name-field">
                    <?php
                    include "koneksi.php";
                    $id = $_GET["id"];
                    $data = mysqli_query($koneksi, "SELECT * FROM apotek WHERE id='$id'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <div class="size" hidden>
                            <input type="text" name="id" value="<?php echo $d['id']; ?>">
                        </div>
                        <div class="size">
                            <span>Kode Obat</span>
                            <input type="text" name="kode_obat" value="<?php echo $d['kode_obat']; ?>" placeholder="Masukkan kode obat...">
                        </div>
                        <div class="size">
                            <span>Nama Obat</span>
                            <input type="text" name="nama_obat" value="<?php echo $d['nama_obat']; ?>" placeholder="Masukkan nama obat...">
                        </div>
                        <div class="size">
                            <span>Jenis Obat</span>
                            <input type="text" name="jenis_obat" value="<?php echo $d['jenis_obat']; ?>" placeholder="Masukkan jenis obat...">
                        </div>
                        <div class="size">
                            <span>Deskripsi</span>
                            <input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>" placeholder="Masukkan keterangan...">
                        </div>
                        <div class="size">
                            <span>Harga Obat</span>
                            <input type="text" name="harga_obat" value="<?php echo $d['harga_obat']; ?>" placeholder="Masukkan harga obat...">
                        </div>
                        <div class="size">
                            <span>Stock</span>
                            <input type="text" name="stock" value="<?php echo $d['stock']; ?>" placeholder="Masukkan stock...">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <button type="submit" class="btn-submit">Edit</button>
        </form>
    </div>

</body>

</html>