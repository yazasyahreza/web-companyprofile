<section id="featured-services" class="featured-services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Galery</h2>
      <h3>Gallery <span>Kami</span></h3>
      <p>Galery ini berisi album-album Onlenkan, disini kami menunjukkan achievement atau karya dari Onlenkan supaya
        kalian bisa tau apa saja pencapaian yang pernah di raih oleh Onlenkan</p>
    </div>

    <div class="row">
      <?php
      include "../admin/koneksi.php";
      $data = mysqli_query($koneksi, "SELECT * FROM tb_galery order by id_galery");
      while ($d = mysqli_fetch_array($data)) {
        ?>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-5">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img class="card-img-bottom d-block" src="../gambar/<?php echo $d['gambar']; ?>"
                alt="Card image cap"></div>
            <h4 class="title">
              <?php echo $d['judul_galery']; ?>
            </h4>
            <p class="description">
              <?php echo $d['tanggal']; ?>
            </p>
          </div>
        </div>

      <?php } ?>

    </div>

  </div>
</section>