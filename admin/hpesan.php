
<?php 

    include_once("koneksi.php");

    if(isset($_POST['hapus'])){

        $id = $_POST['id'];
        $jum = count($id);

        for($i=0; $i<$jum; $i++){
            mysqli_query($koneksi, "DELETE FROM tb_pesan WHERE id_pesan='$id[$i]'");
        }
        echo "<meta http-equiv=refresh content=1;URL='pesan.php'>";
    }

?>