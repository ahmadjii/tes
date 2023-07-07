<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Apotek</title>
</head>

<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Apotek.xls");
    ?>

    <h1>Data Apotek</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Jenis Obat</th>
                <th>Deskripsi</th>
                <th>Harga Obat</th>
                <th>Stock</th>


            </tr>
        </thead>
        <tbody>
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
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>