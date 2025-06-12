<?php
session_start();
include "koneksi.php";
if (!empty($_SESSION['iduser'])) {
    echo "<script>location='index.php'</script>";
} else {
    if (@$_POST['login']) {
        $user = $_POST['txtuser'];
        $pass = md5($_POST['txtpass']);

        $sql = "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'";
        $q = mysqli_query($koneksi, $sql);
        if (mysqli_num_rows($q) > 0) {
            $r = mysqli_fetch_assoc($q);
            $_SESSION['iduser'] = $r['id_user'];
            $_SESSION['namauser'] = $r['nama_user'];
            echo "<script>location='index.php'</script>";
        } else {
            echo "<script>alert('Masukkan Username dengan Password yang benar!!!');location='login.php'</script>";
        }
    }
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

    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block"><img src="img/logo.png" width="115%"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang Kembali!</h1>
                                        </div>
                                        <form class="user" method="POST" action="">
                                            <div class="form-group">
                                                <input name="txtuser" type="text" class="form-control form-control-user"
                                                    aria-describedby="emailHelp" placeholder="Masukkan Username">
                                            </div>
                                            <div class="form-group">
                                                <input name="txtpass" type="password" class="form-control form-control-user"
                                                    placeholder="Password">
                                            </div>

                                            <input name="login" type="submit" value="Login"
                                                class="btn btn-success btn-user btn-block">
                                            <hr>
                                            Silahkan Login Terlebih Dahulu
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
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