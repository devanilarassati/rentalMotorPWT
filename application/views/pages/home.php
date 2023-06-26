<!-- <link rel="stylesheet"  href="../assets/css/whatsapp.css" > -->
<link rel="stylesheet"  href="../assets/css/kelebihanWeb.css" >
<link rel="stylesheet"  type="text/css" href="../assets/fontawesome/css/all.min.css" >

<br><br>
<!-- Container (Kelebihan Rental Motor PWT) -->
<div id="services" class="container-fluid text-center">
  <h2>Sewa Motor Purwokerto</h2>
  <h4>Cepat, Mudah, dan Nyaman</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fab fa-youtube "></span>
      <i class = "fab fa-youtube "> </i>
      <!-- <img src="assets/image/surat.svg" width:"300px" height:"300px" > -->
      <object data="assets/image/hujan.svg" width="200" height="200"> </object>
      <h4>2 Helm & 2 Jas Hujan</h4>
      <p>Anda akan Mendapatkan sepasang helm dan Jas Hujan</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <span class="mdi mdi-atv"></span>
      <object data="assets/image/surat2.svg" width="200" height="200"> </object>
      <h4>Surat dan Dokumen Lengkap</h4>
      <p>Surat STNK yang lengkap dan pastinya aman</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <object data="assets/image/antar.svg" width="200" height="200"> </object>
      <h4>Jasa Antar Jemput</h4>
      <p>Dapat menjemput dan mengantar motor sesuai request user</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <object data="assets/image/motor2.svg" width="200" height="200"> </object>
      <h4>Banyak Tipe Unit</h4>
      <p>Terdapat banyak pilihan Motor</p>
    </div>
    <div class="col-sm-4">
      <object data="assets/image/asuransi.svg" width="200" height="200"> </object>
      <h4>Asuransi Keamanan</h4>
      <p>Anda akan mendapatkan jaminan asuransi keamanan</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <object data="assets/image/aman.svg" width="200" height="200"> </object>
      <h4 style="color:#303030;">Kondisi Motor Bagus</h4>
      <p>Motor selalu diservis setiap bulannya</p>
    </div>
  </div>
</div>
<!-- End Kelebihan -->

<br><br>
<div class="container marketing">
    <h2 class=" display-6 text-center">Daftar Sewa Motor PWT</h2>
    <hr>
    <?php if ($this->cart->total_items() != '0') { ?>
    <div class="alert btn-block alert-error fade in btn btn-primary"><button type="button" class="close"
            data-dismiss="alert">×</button><strong>Anda Memiliki <a
                href="<?php echo site_url('Rmotor_Controller/rpesanan') ?>"> <?php echo $this->cart->total_items() ?>
                pesanan </a> di pesanan anda</strong></div>
    <?php  }
  ?>
    <?php
  $message = $this->session->flashdata('dataPesanan');
  if ($message) {

    echo '<div class="alert btn-block alert-error fade in btn btn-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
  } ?>
    <div id="myCarousel1" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <?php
          if (isset($data_menu)) {
            foreach ($data_menu as $row) {
          ?>
                    <div class="col-lg-4">
                        <form method="post" action="<?php echo site_url('Rmotor_Controller/tambahToCart') ?>">
                            <input type="hidden" name="id_motor" value="<?php echo $row->id_motor ?>">
                            <input type="hidden" name="harga_rental" value="<?php echo $row->harga_rental ?>">
                            <input type="hidden" name="nm_motor" value="<?php echo $row->nm_motor ?>">
                            <img src="<?php echo base_url('uploads/' . $row->foto_motor) ?>">
                            <h4><?php echo $row->nm_motor; ?></h4>
                            <p>Biaya Rental : <strong><?php echo currency_format($row->harga_rental); ?></strong> /Hari
                            </p>
                            <input type="number" name="hari" placeholder="hari" required>
                            <button type="submit">Pesan</button>
                        </form>
                    </div>
                    <?php }
          }
          ?>
                </div>
            </div>
        </div>
    </div>
      <!-- <div  class=whatsapp-button>
    <a href="https://api.whatsapp.com/send?082265107472" target="_blank" class="whatsapp-button">
  <i class="fa fa-whatsapp"></i> Hubungi Kami
</a>
        </div> -->
<!-- <a href="https://api.whatsapp.com/send?phone=910000000000&text=Hello this is the starting message">Whatsapp Chat</a> -->
  <!-- <script>
  document.addEventListener('DOMContentLoaded', function() {
    var whatsappButton = document.querySelector('.whatsapp-button');
    whatsappButton.style.display = 'none';

    setTimeout(function() {
      whatsappButton.style.display = 'flex';
    }, 2000); // Ubah angka 2000 menjadi jumlah milidetik yang diinginkan sebelum tombol muncul
  });
  </script> -->
</div>
<hr>
