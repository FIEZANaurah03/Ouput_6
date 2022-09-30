<?php
$koneksi = mysqli_connect("localhost", "root", "", "web");
$sql = "SELECT* FROM tbl_mhs";
$hasil = mysqli_query($koneksi, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Data Mahasiswa Teknik</h2>
        <p>Data Ini Dari Mysql:</p>
        <button type="button" class="btn btn-primary">Tambah</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID_MHS</th>
                    <th>NAMA_MHS</th>
                    <th>NIM_MHS</th>
                    <th>ALAMAT_MHS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($baris = mysqli_fetch_assoc($hasil)) {
                ?>
                    <tr>
                        <td><?php echo $baris['id_mhs']; ?></td>
                        <td><?php echo $baris['nama_mhs']; ?></td>
                        <td><?php echo $baris['nim_mhs']; ?></td>
                        <td><?php echo $baris['alamat_mhs']; ?></td>
                        <td>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                    </tr>
                    <tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>