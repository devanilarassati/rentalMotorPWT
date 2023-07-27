<div class="container marketing">

<div class="col-lg-9">
      <div class="row">
        <!-- <h4 class="mt-4 list-group-item list-group-item-action bg-warning text-black-50 ml-3">Rental Motor</h4> -->
        <div class="col-lg mb-4">
          <form action="" method="post">
            <div class="form-group">
              <label for="denda"><div class="alert alert-danger mb-0" role="alert"><i class="fa fa-info-circle" aria-hidden="true"></i> Jika pengembalian motor terlambat 1 hari akan di denda sebesar <b>Rp.50.0000</b> dan akan di tambahkan setiap harinya.</div></label>
              <!-- <input type="text" name="denda" id="denda" class="form-control" value="<?= $mobil['denda']; ?>" readonly> -->
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

<div>