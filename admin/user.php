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
    $elementss = @$_GET['elements'];
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
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="img/logo-putih.png" width="40" height="40" style="margin-bottom: 5px;">
                    </div>
                    <div class="sidebar-brand-text mx-1">Nlenkan</div>
                </a>


                <hr class="sidebar-divider my-0">


                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Beranda</span></a>
                </li>


                <hr class="sidebar-divider">


                <div class="sidebar-heading">
                    Data
                </div>


                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-file"></i>
                        <span>Data Utama</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Data:</h6>
                            <a class="collapse-item" href="biodata.php">Biodata</a>
                            <a class="collapse-item" href="berita.php">Berita</a>
                            <a class="collapse-item" href="kegiatan.php">Kegiatan</a>
                            <a class="collapse-item" href="galery.php">Galery</a>
                            <a class="collapse-item" href="behavior.php">Behavior</a>
                            <a class="collapse-item" href="pesan.php">Pesan</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    User
                </div>

                <li class="nav-item active">
                    <a class="nav-link" href="user.php">
                        <i class="fas fa-fw fa-user"></i>
                        <span>User</span></a>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Lain-lain
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="keluar.php" onclick="return confirm('Yakin Ingin Meninggalkan Halaman?')">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                        <span>Keluar</span></a>
                </li>

                <hr class="sidebar-divider d-none d-md-block">

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
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

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tabel User</h1>


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <a href="tambahuser.php" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="" method="POST">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th style="text-align: center; vertical-align: middle;">No</th>
                                                    <th style="text-align: center; vertical-align: middle;">Nama User
                                                    </th>
                                                    <th style="text-align: center; vertical-align: middle;">Email
                                                    </th>
                                                    <th style="text-align: center; vertical-align: middle;">Alamat</th>
                                                </tr>
                                            </thead>
                                            <?php

                                            $no = 1;
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi, "SELECT * FROM tb_user");
                                            while ($d = mysqli_fetch_array($data)) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $no++ ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $d['nama_user']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $d['email']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $d['alamat']; ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

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