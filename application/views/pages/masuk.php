<link rel="stylesheet"  href="../assets/css/style.css" >

<div class="mainTitle">
    <div class="container">
        <?php
		$message = $this->session->flashdata('notif');
		if ($message) {

			echo '<div class="alert alert-block alert-error fade in"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $message . '</strong></div>';
		} ?>
        <p>
        </p>
    </div>
</div>

<br><br><br>
<div class="row justify-content-md-center align-items-center">
    <H1 class="display-6 text-center">Selamat Datang</H1>
    <!-- Indicators -->
    <div class="col-sm-4">
        <form method="post" action="<?php echo site_url('Login_Controller/prosesLogin') ?>" id="popup-validation">
            <div class="col-sm" >
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="validate[required,minSize[6]] form-control" title="Username yang anda masukkan salah." name="username" id="username"
                    required>
            </div>
            <div class="col-sm">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input class="validate[required,minSize[6]] form-control" type="password" name="password" id="password"
                    required />
                    <br>
                    <input type="checkbox" onclick="myFunction()">Show Password
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("password");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
            </div>
            <div class="mb-3">
                <hr>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="<?php echo site_url('Login_Controller/daftar/') ?>" class="btn btn-info btn-round">Daftar</a>

            <div class="col-lg-6">
                <dl class="dl-horizontal">
                    <dt>&nbsp</dt>
                    <dd>&nbsp</dd>
                    <br />
                    <dt>&nbsp</dt>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                </dl>
            </div>
        </form>
        <hr>
    </div>
</div>