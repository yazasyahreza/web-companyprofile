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

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tabel Berita</h1>


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <form action="tambahberita.php" method="POST">
                                    <div class="input-group">
                                        <input type="number" name="jum" class=" bg-light border-5 small form-inline"
                                            placeholder="Jumlah Data" aria-label="Search" aria-describedby="basic-addon2"
                                            required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="table-primary">
                                            <tr>
                                                <th style="text-align: center; vertical-align: middle;">No</th>
                                                <th style="text-align: center; vertical-align: middle;">Judul Berita</th>
                                                <th style="text-align: center; vertical-align: middle;">Tanggal Post</th>
                                                <th style="text-align: center; vertical-align: middle;">ID User</th>
                                                <th style="text-align: center; vertical-align: middle;">Isi Berita</th>
                                                <th style="text-align: center; vertical-align: middle;">Gambar</th>
                                                <th style="text-align: center; vertical-align: middle;">Lain-Lain</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;

                                        include 'koneksi.php';
                                        $data = mysqli_query($koneksi, "SELECT * FROM tb_berita");
                                        while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['judul']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['tgl_post']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['id_user']; ?>
                                                    </th>
                                                <td>
                                                    <?php echo $d['isi_berita']; ?>
                                                </td>
                                                <td><img src="../gambar/<?php echo $d['gambar']; ?>" width="200px"
                                                        height="200px"></td>
                                                <td style="text-align: center;">
                                                    <a href="editberita.php?id_berita=<?php echo $d['id_berita'] ?>"
                                                        class="btn btn-success" style="margin-bottom: 10px">Edit</a>
                                                    <a href="hberita.php?id_berita=<?php echo $d['id_berita'] ?>"
                                                        onclick="return confirm('Yakin Akan Menghapus Data?')"
                                                        class="btn btn-danger" style="margin-top: 10px">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
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