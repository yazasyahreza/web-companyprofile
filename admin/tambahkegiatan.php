<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['iduser'])) {
    echo "<script>location='login.php'</script>";
} else {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <?php
    $elements = @$_GET['elements'];
    $elements = "elements/header.php";
    $p = "elements/$elements.php";
    if (!empty($elements) && file_exists($p)) {
        include "$p";
    } else {
        include "$elements";
    }
    ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php
            $elements = @$_GET['elements'];
            $elements = "elements/sidebar.php";
            $p = "elements/$elements.php";
            if (!empty($elements) && file_exists($p)) {
                include "$p";
            } else {
                include "$elements";
            }
            ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php
                    $elements = @$_GET['elements'];
                    $elements = "elements/navbar.php";
                    $p = "elements/$elements.php";
                    if (!empty($elements) && file_exists($p)) {
                        include "$p";
                    } else {
                        include "$elements";
                    }
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <form method="POST" enctype="multipart/form-data">

                            <?php
                            $no= 1;
                            $jum = $_POST['jum'];

                            for ($i = 1; $i <= $jum; $i++) {

                                ?>
                                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h1 class="h3 mb-2 text-gray-800">Tambah Data Kegiatan 
                            <?php 
                                echo $no++;
                            ?>
                        </h1>
                    </div>
                    <div class="card-body">
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Kegiatan :</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputPassword3" name="tgl_kegiatan[]">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kegiatan:</label>
                    <div class="col-sm-10">
                    <input type="tel" class="form-control" id="inputPassword3" name="kegiatan[]">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi :</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="inputPassword3" name="deskripsi[]"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar :</label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputPassword3" name="gambar[]">
                    </div>
                </div>
    
                    </div>
                    </div>

                    <?php  } ?>

                            <input type="hidden" name="jum" value="<?php echo $jum; ?>">
                    </div class="row mb-3">
                    <div class="col-sm-10">
                        <input name="tambah" type="submit" class="btn btn-primary" value="Tambah"
                            style="margin-bottom: 40px; margin-left: 15px;">
                        </form>
                    </div>
                </div>

                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Onlenkan | Software House</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

    </html>

<?php } ?>

<?php
if (isset($_POST['tambah'])) {

    $jum = $_POST['jum'];

    $tgl_kegiatan = $_POST['tgl_kegiatan'];
    $kegiatan = $_POST['kegiatan'];
    $deskripsi = $_POST['deskripsi'];
    $id_user = $_SESSION['iduser'];
    $folder = '../gambar/';

    include_once("koneksi.php");

    for ($i = 0; $i < $jum; $i++) {
        $gambar = $_FILES['gambar']['name'][$i];
        $source = $_FILES['gambar']['tmp_name'][$i];

        move_uploaded_file($source, $folder . $gambar);

        $d = mysqli_query($koneksi, "INSERT INTO tb_kegiatan (tgl_kegiatan, kegiatan, deskripsi, id_user, gambar) VALUE('$tgl_kegiatan[$i]', '$kegiatan[$i]', '$deskripsi[$i]', '$id_user', '$gambar')");
    }
    echo "<meta http-equiv=refresh content=1;URL='kegiatan.php'>";
}
?>