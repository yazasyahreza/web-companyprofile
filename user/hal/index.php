<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Berita</h2>
      <h3>Berita <span>Terbaru</span></h3>
      <p>disini kami juga menyediakan berita agar kalian selalu melihat apa saja informasi yang terbaru dan update dari
        kami.</p>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200"> 
      <?php
      include "../admin/koneksi.php";
      $data = mysqli_query($koneksi, "SELECT * FROM tb_berita order by id_berita desc limit 3");
      while ($d = mysqli_fetch_array($data)) {
        ?>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img class="img-fluid" src="../gambar/<?php echo $d['gambar']; ?>">
          <div class="portfolio-info">
            <h4>
              <?php echo $d['judul'] ?>
            </h4>
            <p>
              <?php echo $d['tgl_post'] ?>
            </p>
          </div>
        </div>

      <?php } ?>
    </div>

  </div>
</section><!-- End Portfolio Section -->

<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Agenda</h2>
      <h3>Daftar <span>Agenda</span></h3>
      <p>ini adalah daftar kegiatan kami selama magang dionlenkan. kami menyertakan gambar dengan deskipsi nya agar
        kalian tau apa saja kegiatan yang kami laksanakan disana</p>
    </div>

    <div class="row justify-content-center">
  <?php
  $counter = 1; // Menambahkan counter untuk id unik
  include "../admin/koneksi.php";
  $data = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan order by id_kegiatan desc limit 4");
  while ($d = mysqli_fetch_array($data)) {
    ?>
    <div class="col-xl-10">
      <ul class="faq-list">
        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq<?php echo $counter; ?>">
            <?php echo $d['kegiatan']; ?><i class="bi bi-chevron-down icon-show"></i><i
              class="bi bi-chevron-up icon-close"></i>
          </div>
          <div id="faq<?php echo $counter; ?>" class="collapse" data-bs-parent=".faq-list">
            <p>
              <?php echo $d['deskripsi']; ?>
            </p>
          </div>
        </li>
      </ul>
    </div>
  <?php 
  $counter++; // Menambah counter setiap kali iterasi
  } ?>
</div>

  </div>
</section>


<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-4 col-md-6 mt-5 mt-lg-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Happy Clients</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-5 mt-lg-6">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Project Success</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-5 mt-lg-6">
        <div class="count-box">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
            class="purecounter"></span>
          <p>Tech Talents</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Clients Section ======= -->
<section id="featured-services" class="featured-services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Galery</h2>
      <h3>Galery <span>Kami</span></h3>
      <p>Galery ini berisi album-album Onlenkan, disini kami menunjukkan achievement atau karya dari Onlenkan supaya
        kalian bisa tau apa saja pencapaian yang pernah di raih oleh Onlenkan</p>
    </div>
    <div class="row">
      <?php
      include "../admin/koneksi.php";
      $data = mysqli_query($koneksi, "SELECT * FROM tb_galery order by id_galery desc limit 4");
      while ($d = mysqli_fetch_array($data)) {
        ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-5">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon">
              <img class="card-img-bottom" src="../gambar/<?php echo $d['gambar']; ?>" alt="Card image cap">
            </div>
            <h4 class="title"><?php echo $d['judul_galery']; ?></h4>
            <p class="description"><?php echo $d['tanggal']; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section><!-- End Services Section -->