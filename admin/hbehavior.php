<?php
include 'koneksi.php';
if (isset($_GET['id_behavior'])) {
    $delete = mysqli_query($koneksi, "delete from tb_behavior where id_behavior = '" . $_GET['id_behavior'] . "' ");
    echo "<meta http-equiv=refresh content=1;URL='behavior.php'>";
}
?>