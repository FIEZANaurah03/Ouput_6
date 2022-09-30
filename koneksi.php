<?php
// Create connection
$koneksi = mysqli_connect("localhost", "root", "", "web");
// Check Connection
if ($koneksi) {
    echo "Berhasil melakukan koneksi";
}
