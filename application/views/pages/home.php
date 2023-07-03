<!-- <link rel="stylesheet"  href="../assets/css/whatsapp.css" > -->
<link rel="stylesheet"  href="../assets/css/kelebihanWeb.css" >
<link rel="stylesheet"  type="text/css" href="../assets/fontawesome/css/all.min.css" >

<!-- STYLE TEXT DIGAMBAR -->
<style>
      .image-container {
        position: relative;
        display: inline-block;
      }

      .image-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
      }

      .image-text h1 {
        font-size: 60px;
      }

      .image-text p {
        font-size: 30px;
      }

      .logo {
      display: inline-block;
      vertical-align: middle;
      margin-right: 10px;
      margin-left: 20px;
      width: 45px; /* Ubah ukuran gambar logo sesuai kebutuhan */
      height: auto;
    }
    .website-name {
      display: inline-block;
      vertical-align: middle;
      color: white;
    }

    .container-footer {
      background-color: black; /* Ganti dengan kode warna yang diinginkan */
      /* padding: 20px; Tambahkan padding sesuai kebutuhan */
      display: flex;
      justify-content: space-between;
      
    }
    

    .info-web {
      color: white;
      margin-right: 20px; 
      margin-left: 20px;
      text-align: left;
      flex-basis: 50%; 
    }

    .contact-info {
      flex-basis: 50%; /*Menggunakan 50% lebar container untuk contact-info */
}

    /* Style web info */
    

 </style>
<br><br>
<div class="image-container">
    <img src="assets/image/rp2.jpg" width="1500" height="600" >
    <div class="image-text">
      <h1><b>Rental Motor PWT</b></h1>
      <p><b>Cepat, Mudah, dan Nyaman</b></p>
  </div>
</div>


<br><br><br>
<!-- Container (Kelebihan Rental Motor PWT) -->
<div id="services" class="container-fluid text-center">
  <h2>Fasilitas Yang Akan Anda Dapatkan</h2>
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
  <br>
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

</div>

<br><br><br><br>
<div id="services" class="container-fluid text-center">
    <h2>Setelah Melakukan Pemesanan, Silakan Hubungi kami untuk lokasi penjemputannya</h2>
    <h3>Share lokasi anda, kami siap mengantar dan menjemput motor sesuai tujuan</h3>
      <h4>Tenang informasi Anda Dijamin Aman</h4>
        <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
            <a class="m-3 text-black" target="_blank" href="https://api.whatsapp.com/send?phone=6282265107472&text=Halo%20Admin%20Saya%20Mau%20Menyewa Motor">Hubungi Kami</a>
        </div>
  </div>

<br><br>
<!-- Dokumentasi Rental Motor PWT -->
<div id="services" class="container-fluid text-center">
  <h2>Dokumentasi Rental Motor PWT</h2>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fab fa-youtube "></span>
      <i class = "fab fa-youtube "> </i>
      <!-- <img src="assets/image/rental.jpg" width:"300px" height:"300px" > -->
      <object data="assets/image/rental.jpg" width="400" height="400"> </object>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <span class="mdi mdi-atv"></span>
      <object data="assets/image/rental2.jpeg" width="400" height="400"> </object>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <object data="assets/image/rental3.jpeg" width="400" height="400"> </object>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <object data="assets/image/rental5.jpeg" width="400" height="400"> </object>
    </div>
    <div class="col-sm-4">
      <object data="assets/image/rental 4.jpeg" width="400" height="400"> </object>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <object data="assets/image/rental6.jpeg" width="400" height="400"> </object>
    </div>
  </div>
</div>
<!-- End Kelebihan -->

<div class="container-footer">
  <div>
    <img class="logo" src="assets/image/logo.jpg" alt="Logo Website">
    <h1 class="website-name">Rental Motor PWT</h1>
  </div>

  <div class="info-web">
      <p>JEJO Rental Motor melayani jasa sewa motor Jogja dengan motor keluaran terbaru nyaman bergaransi untuk wisatawan yang berlibur 
        di Yogyakarta. Sehingga waktu liburan di jogja yang terbatas bisa maksimal dan lancar. 
        Tentunya juga untuk mendukung pariwisata di Jogja semakin banyak yang berkunjung terima kasih</p>
  <div>


  <div>

			<div class="contact-info">
				<br><br>
				<p>Silakan hubungi kami melalui form atau kontak berikut.</p>
				<p><i class="fas fa-map-marker-alt"></i> Alamat: Asrama Wisma Az-Zahra Universitas Amikom Purwokerto</p>
				<p><i class="fab fa-whatsapp"></i> Telepon/Whatsapp: 0822 - 6510 - 7472</p>
				<p><i class="far fa-calendar-plus"></i> Hari Buka: Setiap Hari</p>
				<p><i class="far fa-clock"></i> Jam Buka: 06.00 - 22.00</p>
				<p><i class="far fa-envelope"></i> Email: rentalmotorpwt@gmail.com</p>
				<p><i class="fab fa-instagram"></i> Instagram: @rentalmotorpwtAja</p>
			</div>

	</div>

</div>


<hr>
