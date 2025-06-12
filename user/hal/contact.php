<section id="" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Kami siap membantu dan menolong bisnis anda, hubungi kami untuk berdiskusi, GRATIS!</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <?php
                  include "../admin/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM tb_biodata order by id_biodata");
                  while($d = mysqli_fetch_array($data)){
        ?>
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $d['alamat'];?></p>
            </div>
          </div>


          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>client@onlenkan.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?php echo $d['telepon']; ?></p>
            </div>
          </div>

        </div>

        <?php } ?>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.38245539843!2d113.21559071406077!3d-7.749196478977596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ad9d4bacb9cb%3A0x17220e29c756119b!2sOnlenkan.com%20-%20Jasa%20Pembuatan%20Website%20%26%20Aplikasi%20Probolinggo!5e0!3m2!1sen!2sid!4v1674879172667!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="" method="POST" >
              <div class="row">
                <div class="col form-group m-2">
                  <input type="text" name="xnama" class="form-control" id="name" placeholder="Your Name" required="" style="padding: 20px; box-sizing: border-box;" >
                </div>
                <div class="col form-group m-2">
                  <input type="email" class="form-control" name="xemail" id="email" placeholder="Your Email" required="" style="padding: 20px;" >
                </div>
              </div>
              <div class="form-group m-2">
                <textarea class="form-control" name="xpesan" rows="5" placeholder="Message" required="" style="padding: 20px" ></textarea>
              </div>
              
              <div class="text-center">
                  <input type="submit" name="kirim" value="Send Message" style="border-radius: 5px; height: 50px; width: 170px" class="btn btn-primary btn-style mt-4" onclick="return confirm('Yakin anda mengirim pesan?')" >
              </div>
                        <?php 
                          if(isset($_POST['kirim'])){
                              $nama = $_POST['xnama'];
                              $email = $_POST['xemail'];
                              $pesan = $_POST['xpesan'];
                              $tgl_pesan = date("Y-m-d");

                              include_once("../admin/koneksi.php");

                              //menginput data ke database
                              mysqli_query($koneksi, "INSERT INTO tb_pesan(nama,email,pesan,tanggal)VALUES('$nama', '$email', '$pesan', '$tgl_pesan')");
                              //mengalihkan halaman kembali ke tb_biodata
                              echo "<meta http-equiv=refresh content=1;URL='index.php'>";
                          }
                        ?>
            </form>
          </div>

        </div>

      </div>
</section>