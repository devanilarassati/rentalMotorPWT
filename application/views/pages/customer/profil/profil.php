<div class="container marketing">
    <div id="myCarousel1" data-ride="carousel">

        <body>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Nama Customer</th>
                        <th>Username</th>
                        <th>Jenis Kelamin</th>
                        <th>no_identitas</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    if (isset($data_customer)) {
                        foreach ($data_customer as $row) {
                    ?>
                    <tr class="odd gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->nm_user; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->jk; ?></td>
                        <td><?php echo $row->no_identitas; ?></td>
                        <td><?php echo $row->almt_user; ?></td>
                        <td><?php echo $row->notelp_user; ?></td>
                        <td><?php echo $row->email_user; ?></td>

                    </tr>
                    <?php }
                    }
                    ?>
                </tbody>
            </table>

            <div class="col-lg-6">
                <dl class="dl-horizontal">
                    <dt>&nbsp</dt>
                    <dd>&nbsp</dd>
                    <br />
                    <dt>&nbsp</dt>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                    <dd>&nbsp</dd>
                </dl>
            </div>

            <script src="<?php echo base_url('assets/bootstrap-rmotor /assets/js/jquery-1.10.2.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/bootstrap-rmotor/dist/js/bootstrap.min.js') ?>"></script>
            <script src="<?php echo base_url('assets/bootstrap-rmotor/assets/js/holder.js') ?>"></script>
            <footer>
                <div class="container">
                    <p>&copy; 2023 Rental Motor PWT online </p>
                </div>
            </footer>
    </div>
</div>
</body>



</html>