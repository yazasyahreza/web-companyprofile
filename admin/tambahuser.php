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
                                <h1 class="h3 mb-2 text-gray-800">Tambah Data User</h1>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="" enctype="multipart/form-data">

                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama User
                                            :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                name="nama_user">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email :</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputPassword3" name="email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3" name="alamat">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Username
                                            :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword3"
                                                name="username">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password :</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3"
                                                name="password">
                                        </div>
                                    </div>

                            </div>
                        </div>

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
if (isset($_POST['tambah'])) {
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    include_once("koneksi.php");

    //menginput data ke database
    $d = mysqli_query($koneksi, "INSERT INTO tb_user (nama_user, email, alamat, username, password) VALUE('$nama_user', '$email' ,'$alamat', '$username', '$password')");

    //mengalihkan elementsaman kembali ke tb_biodata
    echo "<meta http-equiv=refresh content=1;URL='user.php'>";
}
?>