<section id="pricing" class="pricing">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Agenda</h2>
      <h3>Daftar <span>Agenda</span></h3>
      <p>ini adalah daftar kegiatan kami selama magang dionlenkan. kami menyertakan gambar dengan deskipsi nya agar
        kalian tau apa saja kegiatan yang kami laksanakan disana
      </p>
    </div>

    <div class="row">
      <?php
      include "../admin/koneksi.php";
      $data = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan order by id_kegiatan");
      while ($d = mysqli_fetch_array($data)) {
        ?>
        <div class="col-lg-4 col-md-5 mt-4 mb-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box ">
            <h3>
              <?php echo $d['kegiatan']; ?>
            </h3>
            <ul>
              <li>
                <?php echo $d['deskripsi']; ?>
              </li>
            </ul>
            <div class="btn-wrap">
             <h6 class="btn-buy" style="color: white;"><?php echo $d['tgl_kegiatan'] ?></h6>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</section>