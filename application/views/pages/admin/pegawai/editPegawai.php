<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-ok"></i></div>
                <h5><?php echo $formTitle?></h5>
            </header>
            <div id="collapse2" class="body collapse in">
                <form method="post" action="<?php echo site_url('Admin_Controller/prosesEditPegawai')?>"
                    class="form-horizontal" id="popup-validation">

                    <?php
                if (isset($data_pegawai)){
                    foreach($data_pegawai as $row){
                ?>
                    <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
                    <input type="hidden" name="lvl_user" value="admin">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Nama Pegawai</label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required] form-control" name="nm_user" id="nm_user"
                                value="<?php echo $row->nm_user;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Username </label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required,minSize[6]] form-control" name="username"
                                id="username" value="<?php echo $row->username;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,minSize[6]] form-control" type="password" name="password"
                                id="password" value="<?php echo $row->password;?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">Confirm Password</label>

                        <div class=" col-lg-4">
                            <input class="validate[required,equals[password]] form-control" type="password" name="pass2"
                                id="pass2" value="<?php echo $row->password;?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">E-mail</label>
                        <div class=" col-lg-4">
                            <input class="validate[required,custom[email]] form-control" type="text" name="email_user"
                                id="email_user" value="<?php echo $row->email_user;?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">No Telp </label>
                        <div class="col-lg-4">
                            <input type="text" class="validate[required,custom[number]] form-control" name="notelp_user"
                                id="notelp_user" value="<?php echo $row->notelp_user;?>">
                        </div>
                    </div>
                    <div style="text-align:center" class="form-actions no-margin-bottom">
                        <button type="submit" class="btn btn-default btn-round">Submit</button>
                        <a href="<?php echo site_url('Admin_Controller/pegawai/')?>"
                            class="btn btn-default btn-round">Cancel</a>
                    </div>
                    <?php }
                    }
                ?>
                </form>
            </div>
        </div>
    </div>
</div>