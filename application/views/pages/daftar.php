<div class="row justify-content-md-center align-items-center">
    <hr>
    <H1 class="display-6 text-center">Silakan Daftar</H1>
    <hr>
    <!-- Indicators -->
    <div class=" col-sm-6 ">
        <div class=" col-sm-12">
            <form name="formPendaftaran" method="post" action="<?php echo site_url('Login_Controller/prosesDaftar') ?>" id="popup-validation">
                <input type="hidden" name="lvl_user" value="customer">
                <div class="col-sm-5">
                    <label for="nm_user" class="form-label">Nama Lengkap
                            <input type="text" pattern="^[a-zA-Z\s'-]{1,100}$" class="validate[required,minSize[6]] form-control" name="nm_user"
                            maxlength="40" minlength="3" id="nm_user" required></label>
                </div>
                <div class="col-sm-5">
                    <label for="nm_identitas">Pilih Identitas
                        <select class="form-control" name="nm_identitas">
                            <option value=""></option>
                            <?php
                            if (isset($data_identitas)) {
                                foreach ($data_identitas as $row) {
                            ?>
                            <option value="<?php echo $row->nm_identitas; ?> "><?php echo $row->nm_identitas; ?>
                            </option>
                            <?php }
                            }  
                            ?>
                        </select>
                    </label>
                </div>

                <div class="col-sm-5">
                    <label for="username" class="form-label">Username
                        <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$" class="validate[required,minSize[6]] form-control" name="username"
                            id="username" required></label>
                </div>

                <div class="col-sm-5">
                    <label for="jenis_kelamin">Jenis Kelamin
                        <select class="form-control" name="jenis_kelamin">
                            <option value=""></option>
                            <?php
                            if (isset($data_gender)) {
                                foreach ($data_gender as $row) {
                            ?>
                            <option value="<?php echo $row->jenis_kelamin; ?> "><?php echo $row->jenis_kelamin; ?>
                            </option>
                            <?php }
                            }  
                            ?>
                        </select>
                    </label>
                </div>

                <div class="col-sm-5">
                    <label for="password" class="form-label">Password
                        <input type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" class="validate[required,minSize[6]] form-control" name="password"
                            id="password" required></label>
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

                <div class="col-sm-5">
                    <label for="no_identitas" class="form-label">Nomor Identitas/NIK
                        <input type="number" title="Inputan harus angka dan berjumlah 16 digit!" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                         maxlength="16" class="validate[required,minSize[6]] form-control" name="no_identitas"
                            id="no_identitas" required></label>
                </div>

                <div class="col-sm-5">
                    <label for="almt_user" class="form-label">Alamat Anda
                        <input type="text" class="validate[required,minSize[6]] form-control" name="almt_user"
                            id="almt_user" required></label>
                </div>

                <div class="col-sm-5">
                    <label for="notelp_user" class="form-label">Nomor Telepon Anda
                        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                        type="number"  maxlength="12" class="validate[required,minSize[6]] form-control" name="notelp_user"
                        id="notelp_user"  required>
                        </label>
                        
                </div>

                <div class="col-sm-5">
                    <label for="email_users" class="form-label">Email Anda
                        <input type="email" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+[.]+[a-zA-Z]{2,10}$" class="validate[required,minSize[6]] form-control" name="email_user"
                            id="email_user" required></label>
                </div>

                <button type="submit" class="btn btn-primary ">Daftar</button>
                <a href="<?php echo site_url('Login_Controller') ?>" class="btn btn-default btn-round">Login</a>
            </form>
        </div>
    </div>
</div>
<hr>