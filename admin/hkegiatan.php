<?php
include 'koneksi.php';
if (isset($_GET['id_kegiatan'])) {
    $delete = mysqli_query($koneksi, "delete from tb_kegiatan where id_kegiatan= '" . $_GET['id_kegiatan'] . "' ");
    echo "<meta http-equiv=refresh content=1;URL='kegiatan.php'>";
}
?>