<section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">


        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
      <?php
                        $no = 1;
                        include "../admin/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_behavior order by id_behavior desc limit 9");
                        while($d = mysqli_fetch_array($data)){
      ?>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/logo-putih.png" class="testimonial-img" alt="">
                <h3>Behavior</h3>
                <h3><?php echo $no++; ?></h3>
                <h4><?php echo $d['judul']; ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $d['isi_behavior']; ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            <?php } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>
        
      </div>
</section>