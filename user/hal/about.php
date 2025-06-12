<section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3><span>Onlenkan </span>hadir guna menciptakan teknologi yang lebih efisien</h3>
          
        </div>

        <div class="row">
        <?php
                  include "../admin/koneksi.php";
                  $data = mysqli_query($koneksi, "SELECT * FROM tb_biodata order by id_biodata");
                  while($d = mysqli_fetch_array($data)){
        ?>
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/header-img.png" class="img-fluid" alt="" width="5000" height="4000" style="margin-top: 50px" >
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Sejarah Onlenkan</h3>
            <p class="fst-italic">
            Apa sih itu Onlenkan?, pasti ada sebagian dari kalian yang tidak tahu. Onlenkan adalah startup yang berfokus pada pengembangan mengerjakan projek pemerintah dan coorporations untuk membangun sistemasi dan layanan digital.
            </p>
            <ul>
              <li>
                <i class="bx bxs-user bx-tada-hover"></i>
                <div>
                  <h5>Nama Pimpinan</h5>
                  <p><?php echo $d['nama_pimpinan']; ?></p>
                </div>
              </li>
              <li>
                <i class="bx bxs-like bx-tada-hover"></i>
                <div>
                  <h5>Visi</h5>
                  <p><?php echo $d['visi']; ?></p>
                </div>
              </li>
              <li>
                <i class="bx bx-globe bx-tada-hover"></i>
                <div>
                  <h5>Misi</h5>
                  <p><?php echo $d['misi']; ?></p>
                </div>
              </li>
            </ul>
            <p>
            Onlenkan juga mempunyai sejarahnya sendiri, Onlenkan berdiri mulai dari tahun 2018 dan sudah menciptakan beberapa produk teknologi seperti mobile apps dan web applications yang telah dipakai oleh mitra kerja Onlenkan. Onlenkan terbentuk untuk menciptakan teknologi yang lebih efisien sehingga tercipta masa depan yang lebih baik.
            </p>
          </div>
          <?php } ?>
        </div>

      </div>
    </section>