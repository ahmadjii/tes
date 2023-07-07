<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek 9</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    <script src="js/jquery.min.js"></script>
</head>

<body>


    <div class="navbar">
        <div class="logo">
            <span><strong>APOTEK</strong> 9</span>
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
        <div class="header-index">
            <h1>Data Apotek</h1>
            <a href="tambah_data.php" class="btn-tambah">Tambah</a>
            <a href="ekspor.php" class="btn-ekspor">Ekspor</a>
        </div>

        <input class="searchform" type="text" id="search" placeholder="Cari obat">

        <table class="fl-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Deskripsi</th>
                    <th>Harga Obat</th>
                    <th>Stock</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody id="tampil">
                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM apotek");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d["kode_obat"]; ?></td>
                        <td><?php echo $d["nama_obat"]; ?></td>
                        <td><?php echo $d["jenis_obat"]; ?></td>
                        <td><?php echo $d["deskripsi"]; ?></td>
                        <td><?php echo $d["harga_obat"]; ?></td>
                        <td><?php echo $d["stock"]; ?></td>
                        <?php
                        echo "<td><a href='?kode=$d[kode_obat]'> HAPUS </a></td>";

                        ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(data) {
                        $("#tampil").html(data);
                    }
                });
            });
        });
    </script>

    <?php
    if (isset($_GET['kode'])) {
        mysqli_query($koneksi, "DELETE FROM apotek WHERE kode_obat='$_GET[kode]'");
        echo "Data telah terhapus";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
    ?>



</body>

</html>