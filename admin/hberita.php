<?php
include 'koneksi.php';
if (isset($_GET['id_berita'])) {
    $delete = mysqli_query($koneksi, "delete from tb_berita where id_berita= '" . $_GET['id_berita'] . "' ");
    echo "<meta http-equiv=refresh content=1;URL='berita.php'>";
}
?>