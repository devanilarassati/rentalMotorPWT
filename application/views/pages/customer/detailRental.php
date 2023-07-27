<!DOCTYPE html>

<html>
<div class="col-lg-9">
      <div class="row">
        <h4 class="mt-4 list-group-item list-group-item-action bg-warning text-black-50 ml-3">Rental Motor PWT</h4>
        <div class="col-lg mb-4">
          <form action="<?php echo site_url('Rmotor_Controller/dataPesanan') ?>" method="post">
          <!-- <input type="text" name="id_motor" value="<?php echo $motor->id_motor; ?>"> -->
            <!-- <input type="text" name="id_mobil" value="<?= $mobil['id_mobil']; ?>">
            <input type="text" name="id_customer" value="<?= $customer['id_customer']; ?>"> -->
            <!-- <div class="form-group">
              <label for="harga">Harga Sewa / Hari</label>
              <input type="text" name="harga" id="harga" class="form-control" value="<?= $mobil['harga_mobil']; ?>" readonly>
              <small class="text-muted text-danger"><?= form_error('harga'); ?></small>
            </div> -->
            <div class="form-group">
              <label for="denda">Denda <div class="alert alert-danger mb-0" role="alert"><i class="fa fa-info-circle" aria-hidden="true"></i> Jika pengembalian motor terlambat 1 hari akan di denda sebesar <b>Rp.50.000 </b> dan akan di tambahkan setiap harinya.</div></label>
              <!-- <input type="text" name="denda" id="denda" class="form-control" value="" readonly> -->
              <small class="text-muted text-danger"><?= form_error('denda'); ?></small>
            </div>
            <div class="form-group">
              <label for="tgl_rental">Tanggal Rental</label>
              <input type="date" name="tgl_rental" id="tgl_rental" class="form-control">
              <small class="muted text-danger"><?= form_error('tgl_rental'); ?></small>
            </div>
            <div class="form-group">
              <label for="tgl_kembali">Tanggal Kembali</label>
              <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control">
              <small class="muted text-danger"><?= form_error('tgl_kembali'); ?></small>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Pesan</button>
            </div>
          </form> 
          
        </div>
      </div>
      <!-- /.row -->

    </div>








</html>