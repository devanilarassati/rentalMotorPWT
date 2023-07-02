<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/contact.css">
<body>
	<link rel="stylesheet"  href="../assets/css/contact.css" >

	<!--style untuk informasi website dan contact  -->
<style>
	.container-f {
		display: flex;
		justify-content: space-between;
		align-items: flex-start;
		padding-right: 80px;
    	padding-left: 80px;
	}

	.contact-form {
		flex: 1;
		margin-right: 20px;
		
	}
	
	.contact-form h1 {
  		text-align: center;
	}

	.contact-f h1 {
  		text-align: center;
	}

	.contact-info {
		flex: 1;
		margin-left: 60px;
	}

</style>

	<?php $this->load->view('elements/vHeader'); ?>
	<br><br><br>
	<div class="text-center">
		<h1>Contact Us</h1>
		</div>
	<div class="container-f">
		<div  class="contact-form">
		<form action="" method="post" action="<?php echo site_url('Rmotor_Controller/contact') ?>" style="max-width: 600px;">
			<div>
				<label for="nama">Nama*</label>
				<input type="text" name="nama" class="<?= form_error('nama') ? 'invalid' : '' ?>" placeholder="your name" value="<?= set_value('nama') ?>" required />
				<div class="invalid-feedback"><?= form_error('Nama') ?></div>
			</div>
			<div>
				<label for="email">Email*</label>
				<input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>" placeholder="your email address" value="<?= set_value('email') ?>" required />
				<div class="invalid-feedback"><?= form_error('Email') ?></div>
			</div>
			<div>
				<label for="pesan">Pesan*</label><br>
				<textarea name="pesan" cols="30" required class="<?= form_error('pesan') ? 'invalid' : '' ?>" rows="5" placeholder="write your message"><?= set_value('pesan') ?></textarea>
				<div class="invalid-feedback"><?= form_error('Pesan') ?></div>
			</div>

			<div style="display: flex; gap: 1rem">
				<input type="submit" class="button button-primary" value="Kirim">
				<input type="reset" class="button" value="Reset">
			</div>
		</form>	
									
		</div>

			<div class="contact-info">
				<br><br>
				<p>Silakan hubungi kami melalui form atau kontak berikut.</p>
				<p><i class="fas fa-map-marker-alt"></i> Alamat: 123 Street, City, Country</p>
				<p><i class="fab fa-whatsapp"></i> Telepon/Whatsapp: 0822 - 6510 - 7472</p>
				<p><i class="far fa-calendar-plus"></i> Hari Buka: Setiap Hari</p>
				<p><i class="far fa-clock"></i> Jam Buka: 06.00 - 22.00</p>
				<p><i class="far fa-envelope"></i> Email: rentalmotorpwt@gmail.com</p>
				<p><i class="fab fa-instagram"></i> Instagram: @rentalmotorpwtAja</p>
			</div>

	</div>
		
	</body>


	<!--footer Contact-->
    <footer class="bg-dark text-white mb-3">
        <div class="container">
            <div class="row p-3">
                <div class="col-sm-8 col-xxl-9">
                    <div class="mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
						<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
					</svg>
                        <a class="m-3 text-white" target="_blank" href="https://api.whatsapp.com/send?phone=6282265107472&text=Halo%20Admin%20Saya%20Mau%20Menyewa Motor.">Whatsapp</a>
                    </div>
					
                    <div class="mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
						<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
					</svg>
                        <a class="m-3 text-white" target="_blank"
                            href="https://www.instagram.com/rentalmotorpwtaja/">rentalmotorpwtAja</a>
                    </div>

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-medium" viewBox="0 0 16 16">
                            <path
                                d="M9.025 8c0 2.485-2.02 4.5-4.513 4.5A4.506 4.506 0 0 1 0 8c0-2.486 2.02-4.5 4.512-4.5A4.506 4.506 0 0 1 9.025 8zm4.95 0c0 2.34-1.01 4.236-2.256 4.236-1.246 0-2.256-1.897-2.256-4.236 0-2.34 1.01-4.236 2.256-4.236 1.246 0 2.256 1.897 2.256 4.236zM16 8c0 2.096-.355 3.795-.794 3.795-.438 0-.793-1.7-.793-3.795 0-2.096.355-3.795.794-3.795.438 0 .793 1.699.793 3.795z" />
                        </svg>
                        <a class="m-3 text-white"  target="_blank" href="https://medium.com/@devanilarassati">devanilarassati</a>
                    </div>
                </div>

                <div class="col-sm-4 col-xxl-3 text-end mb-3">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
					<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
					<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
				</svg>
						<a class="m-3 text-white" target="_blank"
                        href="https://www.google.com/maps/place/Wisma+Azzahra/@-7.399666,109.2271881,17z/data=!3m1!4b1!4m6!3m5!1s0x2e655e547ed3d7a9:0x644fe414dfe64091!8m2!3d-7.399666!4d109.229763!16s%2Fg%2F11bz0b8wpq?hl=id&entry=ttu">
							Losari Rt 10/Rw 01, Kec. Rembang, Kabupaten Purbalingga, Jawa Tengah 53356
                        </a>
                    
                </div>
            </div>
        </div >

		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			<p class="pull-right"><a href="#">Back to top</a></p>
    		<p>Create with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://rentalmotorpwt.my.id/"
            class="text-white fw-bold">Rental Motor
            Pwt </a>&copy; <?php echo date("Y"); ?></p>
        </div>
    </footer>
    <!--end footer-->
</html>