<?php

if (isset($_POST['search'])) {
    include "koneksi.php";
    $no = 1;
    $search = $_POST['search'];
    $data = mysqli_query($koneksi, "SELECT * FROM apotek WHERE kode_obat LIKE '%" . $search . "%' OR nama_obat LIKE '%" . $search . "%'");
    while ($d = mysqli_fetch_array($data)) {

?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d["kode_obat"]; ?></td>
            <td><?php echo $d["nama_obat"]; ?></td>
            <td><?php echo $d["jenis_obat"]; ?></td>
            <td><?php echo $d["deskripsi"]; ?></td>
            <td><?php echo $d["harga_obat"]; ?></td>
            <td><?php echo $d["genre"]; ?></td>
            <?php echo "<td><a href='?kode=$d[kode_obat]'> HAPUS </a></td>"; ?>
        </tr>

<?php }
} ?>