<?php
include_once("koneksi.php");

$id = $_GET['id_kegiatan'];
$edit = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan where id_kegiatan='$id'");
$r = mysqli_fetch_array($edit);
?>

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

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h1 class="h3 mb-2 text-gray-800">Ubah Data Kegiatan</h1>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="inputPassword3" name="tgl_kegiatan"
                                                value="<?php echo $r['tgl_kegiatan'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kegiatan</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="inputPassword3" name="kegiatan"
                                                value="<?php echo $r['kegiatan'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputPassword3"
                                                name="deskripsi"><?php echo $r['deskripsi'] ?></textarea>
                                        </div>
                                    </div>

                            </div>

                        </div>

                    </div class="row mb-3">
                    <div class="col-sm-10">
                        <input name="ubah" type="submit" class="btn btn-primary" value="Ubah" style="margin-left: 15px">
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

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
if (isset($_POST['ubah'])) {
    $tgl_kegiatan = $_POST['tgl_kegiatan'];
    $kegiatan = $_POST['kegiatan'];
    $deskripsi = $_POST['deskripsi'];
    $id_user = $_SESSION['iduser'];
    include_once("koneksi.php");
   
        $d = mysqli_query($koneksi, "UPDATE tb_kegiatan SET tgl_kegiatan='$tgl_kegiatan', kegiatan='$kegiatan', deskripsi='$deskripsi', id_user='$id_user'  WHERE id_kegiatan = '$id'");
    
    //mengalihkan elementsaman kembali ke tb_biodata
    echo "<meta http-equiv=refresh content=1;URL='kegiatan.php'>";
}
?>