<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
          <h3>Berita <span>Terbaru</span></h3>
          <p>disini kami juga menyediakan berita agar kalian selalu melihat apa saja informasi yang terbaru dan update dari kami</p>
        </div>

        <div class="row">

        <?php
                        include "../admin/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_berita order by id_berita");
                        while($d = mysqli_fetch_array($data)){
        ?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-5" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
              <img class="img-fluid" src="../gambar/<?php echo $d['gambar']; ?>">
                <div class="social">
                  <a href="https://www.facebook.com/onlenkan/?locale=id_ID"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/onlenkan_/?hl=id"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/posts/onlenkancom_onlenkanberbagicinta-beranistandout-jasapembuatanwebsite-activity-7034713825316651008-oUsR/?originalSubdomain=id"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $d['judul']; ?></h4>
                <span><?php echo $d['isi_berita']; ?></span>
              </div>
            </div>
          </div>

          <?php } ?>

        </div>

      </div>
    </section>