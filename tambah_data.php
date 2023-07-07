<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Apotek</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fontawesome/all.css">

    <script src="js/fontawesome/js/all.js"></script>
</head>

<body>

    <div class="navbar">
        <div class="logo">
            <span><strong>DATA </strong>APOTEK</span>
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
                <a href="index.php"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="title">
                <span>Tambah Data Apotek</span>
            </div>
        </div>

        <form action="tambah.php" method="post">
            <div class="form">
                <div class="name-field">
                    <div class="size">
                        <span>Kode Obat</span>
                        <input type="text" name="kode_obat" class="border-invalid" placeholder="Masukkan kode obat...">
                    </div>
                    <div class="size">
                        <span>Nama Obat</span>
                        <input type="text" name="nama_obat" placeholder="Masukkan nama obat...">
                    </div>
                    <div class="size">
                        <span>Jenis Obat</span>
                        <input type="text" name="jenis_obat" class="border-invalid" placeholder="Masukkan jenis obat...">
                    </div>
                    <div class="size">
                        <span>Deskripsi</span>
                        <input type="text" name="deskripsi" placeholder="Masukkan keterangan...">
                    </div>
                    <div class="size">
                        <span>Harga Obat</span>
                        <input type="text" name="harga_obat" class="border-invalid" placeholder="Masukkan harga obat...">
                    </div>
                    <div class="size">
                        <span>Stock</span>
                        <input type="text" name="stock" placeholder="Masukkan stock...">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn-submit">Tambah</button>
        </form>
    </div>

</body>

</html>