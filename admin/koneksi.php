<?php
$koneksi = mysqli_connect("localhost", "root", "", "companyprofile");

// cek koneksi
if (mysqli_connect_errno()) {
    echo "koneksi gagal" . mysqli_connect_errno();
}

?>