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
    $hal = @$_GET['elements'];
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
                        <h1 class="h3 mb-2 text-gray-800">Tabel Biodata</h1>


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <a href="tambahbiodata.php" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="table-primary">
                                            <tr>
                                                <th style="text-align: center; vertical-align: middle;">No</th>
                                                <th style="text-align: center; vertical-align: middle;">Nama Perusahaan</th>
                                                <th style="text-align: center; vertical-align: middle;">Telepon</th>
                                                <th style="text-align: center; vertical-align: middle;">Alamat</th>
                                                <th style="text-align: center; vertical-align: middle;">Nama Pimpinan</th>
                                                <th style="text-align: center; vertical-align: middle;">Logo Perusahaan</th>
                                                <th style="text-align: center; vertical-align: middle;">Visi</th>
                                                <th style="text-align: center; vertical-align: middle;">Misi</th>
                                                <th style="text-align: center; vertical-align: middle;">ID User</th>
                                                <th style="text-align: center; vertical-align: middle;">Lain-Lain</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;

                                        include 'koneksi.php';
                                        $data = mysqli_query($koneksi, "SELECT * FROM tb_biodata");
                                        while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++;?>
                                                </td>
                                                <td>
                                                    <?php echo $d['nama_perusahaan']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['telepon']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['alamat']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['nama_pimpinan']; ?>
                                                </td>
                                                <td><img src="../gambar/<?php echo $d['logo_perusahaan']; ?>" width="150px"
                                                        height="100px"></th>
                                                <td>
                                                    <?php echo $d['visi']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['misi']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['id_user']; ?>
                                                </td>
                                                <td style="text-align: center; vertical-align: middle;">
                                                    <a href="editbiodata.php?id_biodata=<?php echo $d['id_biodata'] ?>"
                                                        class="btn btn-success" style="margin-bottom: 10px">Edit</a>
                                                    <a href="hbiodata.php?id_biodata=<?php echo $d['id_biodata'] ?>"
                                                        onclick="return confirm('Yakin Akan Menghapus Data?')"
                                                        class="btn btn-danger" stype="margin-top: 10px">Hapus</a>
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