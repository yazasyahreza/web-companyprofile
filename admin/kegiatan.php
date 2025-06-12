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


                        <h1 class="h3 mb-2 text-gray-800">Tabel Kegiatan</h1>



                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <form action="tambahkegiatan.php" method="POST">
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
                                                <th style="text-align: center; vertical-align: middle;">No
                                                </th>
                                                <th style="text-align: center; vertical-align: middle;">Tanggal Kegiatan
                                                </th>
                                                <th style="text-align: center; vertical-align: middle;">Kegiatan</th>
                                                <th style="text-align: center; vertical-align: middle;">Dekripsi</th>
                                                <th style="text-align: center; vertical-align: middle;">ID User</th>
                                                <th style="text-align: center; vertical-align: middle;">Lain-Lain</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;

                                        include 'koneksi.php';
                                        $data = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan");
                                        while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++;?>
                                                </td>
                                                <td>
                                                    <?php echo $d['tgl_kegiatan']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['kegiatan']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['deskripsi']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['id_user']; ?>
                                                </td>
                                                <td style="text-align: center;">
                                                    <a href="editkegiatan.php?id_kegiatan=<?php echo $d['id_kegiatan'] ?>"
                                                        class="btn btn-success" style="margin-bottom: 10px" >Edit</a>
                                                    <a href="hkegiatan.php?id_kegiatan=<?php echo $d['id_kegiatan'] ?>"
                                                        onclick="return confirm('Yakin Akan Menghapus Data?')"
                                                        class="btn btn-danger" style="margin-top: 10px" >Hapus</a>
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