<!DOCTYPE html>
<html lang="en">

<body>
	<link rel="stylesheet"  href="../assets/css/contact.css" >

	<?php $this->load->view('elements/vHeader'); ?>

	<br><br><br>
	<div class="container">
		<h1>Contact Us</h1>
		<p>Hubungi kami melalui form berikut</p>
		<form action="" method="post" action="<?php echo site_url('Rmotor_Controller/contact') ?>" style="max-width: 600px;">
			<div>
				<label for="nama">Nama*</label>
				<input type="text" name="nama" class="<?= form_error('nama') ? 'invalid' : '' ?>" placeholder="your name" value="<?= set_value('nama') ?>" />
				<div class="invalid-feedback"><?= form_error('Nama') ?></div>
			</div>
			<div>
				<label for="email">Email*</label>
				<input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>" placeholder="your email address" value="<?= set_value('email') ?>" />
				<div class="invalid-feedback"><?= form_error('Email') ?></div>
			</div>
			<div>
				<label for="pesan">Pesan*</label><br>
				<textarea name="pesan" cols="30" class="<?= form_error('pesan') ? 'invalid' : '' ?>" rows="5" placeholder="write your message"><?= set_value('pesan') ?></textarea>
				<div class="invalid-feedback"><?= form_error('Pesan') ?></div>
			</div>

			<div style="display: flex; gap: 1rem">
				<input type="submit" class="button button-primary" value="Kirim">
				<input type="reset" class="button" value="Reset">
			</div>
		</form>
	</div>
</body>
	<?php $this->load->view('elements/vFooterCustomer'); ?>
</html>