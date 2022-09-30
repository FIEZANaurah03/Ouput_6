<?php
include  "koneksi.php";
$id_mhs = $_POST['id_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$alamat_mhs = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$id_mhs','$nama_mhs','$nim_mhs','$alamat_mhs')";
$hasil = mysqli_query($koneksi, $sql);

if (!$hasil) {
    echo "eksekusi tambah data mahasiswa gagal";
}
echo "<br><a href= 'data_mhs.php'>show data</a>";
