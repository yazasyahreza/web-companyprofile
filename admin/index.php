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

        <div id="wrapper">


            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <img src="img/logo-putih.png" width="40" height="40" style="margin-bottom: 5px;">
                    </div>
                    <div class="sidebar-brand-text mx-1">Nlenkan</div>
                </a>


                <hr class="sidebar-divider my-0">


                <li class="nav-item active">
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

                <li class="nav-item">
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

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

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
                    <div class="container-fluid">


                        <h1 class="h3 mb-4 text-gray-800">Selamat Datang
                            <?php echo $_SESSION['namauser']; ?>
                        </h1>

                        <h4>Admin | Onlenkan</h4>
                        <br>
                        <div class="row">
                            <div class="col-xl-2 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="kegiatan.php"
                                                    class="text-xs font-weight-bold text-dark text-uppercase mb-1">Kegiatan
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="biodata.php"
                                                    class="text-xs font-weight-bold text-dark text-uppercase mb-1">Biodata
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="berita.php"
                                                    class="text-xs font-weight-bold text-dark text-uppercase mb-1">Berita
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="galery.php"
                                                    class="text-xs font-weight-bold text-dark text-uppercase mb-1">Gallery
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="behavior.php"
                                                    class="text-xs font-weight-bold text-dark text-uppercase mb-1">Behavior
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-6 mb-4">
                                <div class="card border-bottom-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="pesan.php"
                                                    class="text-xs font-weight-bold text-dark text-uppercase mb-1">Pesan
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Description</h6>
                                </div>
                                <div class="card-body">
                                    <p>Web admin adalah istilah yang digunakan untuk menggambarkan seseorang atau sebuah tim
                                        yang bertanggung jawab untuk memelihara, mengelola, dan mengoperasikan sebuah situs
                                        web atau aplikasi. Web admin dapat melakukan tugas-tugas seperti mengelola server,
                                        memperbarui dan memelihara konten situs web, mengoptimalkan kinerja situs web,
                                        mengelola pengguna dan hak akses, dan memonitor lalu lintas dan keamanan situs web.
                                    </p>
                                    <p class="mb-0">Web admin juga bertanggung jawab untuk menangani masalah dan kendala
                                        yang terkait dengan situs web, seperti masalah teknis, keamanan, atau performa yang
                                        buruk. Dalam beberapa organisasi besar, web admin juga dapat memiliki tanggung jawab
                                        yang lebih luas, seperti mengelola infrastruktur IT dan aplikasi seluruh perusahaan.

                                    </p>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>

                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Onlenkan | Software House</span>
                            </div>
                        </div>
                    </footer>

                </div>

            </div>

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>


            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <script src="js/sb-admin-2.min.js"></script>

    </body>

    </html>

<?php } ?>