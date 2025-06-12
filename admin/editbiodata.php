<?php
include_once("koneksi.php");

$id = $_GET['id_biodata'];
$edit = mysqli_query($koneksi, "SELECT * FROM tb_biodata where id_biodata='$id'");
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
                                <h1 class="h3 mb-2 text-gray-800">Ubah Data Biodata</h1>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                name="nama_perusahaan" value="<?php echo $r['nama_perusahaan'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Telepon</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="inputPassword3" name="telepon"
                                                value="<?php echo $r['telepon'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" name="alamat"
                                                value="<?php echo $r['alamat'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pimpinan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pimpinan"
                                                value="<?php echo $r['nama_pimpinan'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Logo Perusahaan</label>
                                        <div class="col-sm-10">
                                            <img src="../gambar/<?php echo $r['logo_perusahaan']; ?>" width="150px"
                                                height="100px">
                                            <input type="file" class="form-control" id="inputPassword3"
                                                name="logo_perusahaan">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Visi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputPassword3"
                                                name="visi"><?php echo $r['visi'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Misi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputPassword3"
                                                name="misi"><?php echo $r['misi'] ?></textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>

                    </div class="row mb-3">
                    <div class="col-sm-10">
                        <input name="ubah" type="submit" class="btn btn-primary" value="Ubah" style="margin-left: 15px;">
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
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $nama_pimpinan = $_POST['nama_pimpinan'];
    $logo_perusahaan = $_FILES['logo_perusahaan']['name'];
    $source = $_FILES['logo_perusahaan']['tmp_name'];
    $folder = '../gambar/';
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];
    $id_user = $_SESSION['iduser'];

    include_once("koneksi.php");

    if (empty($logo_perusahaan)) {
        $d = mysqli_query($koneksi, "UPDATE tb_biodata SET  nama_perusahaan='$nama_perusahaan', telepon='$telepon', alamat='$alamat', nama_pimpinan='$nama_pimpinan', visi='$visi', misi='$misi', id_user='$id_user' WHERE id_biodata = '$id'");
    } else {
        $d = mysqli_query($koneksi, "UPDATE tb_biodata SET  nama_perusahaan='$nama_perusahaan', telepon='$telepon', alamat='$alamat', nama_pimpinan='$nama_pimpinan', logo_perusahaan='$logo_perusahaan', visi='$visi', misi='$misi', id_user='$id_user' WHERE id_biodata = '$id'");
        move_uploaded_file($source, $folder . $logo_perusahaan);
    }

    echo "<meta http-equiv=refresh content=1;URL='biodata.php'>";
}
?>