<div class="main-content">
  <section class="section">
    <div class="section-header">
      <!-- <h1><i class="fas fa-clipboard"></i> Data Laporan Transaksi</h1> -->
    </div>
    <div class="section-body">
	      <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4> Laporan Transaksi</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <?= $this->session->flashdata('pesan'); ?>
                  </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-4">
                  <form action="" method="post">
                      <div class="form-group">
                        <label for="dari">Dari Tanggal</label>
                        <input type="date" name="dari" id="dari" class="form-control">
                        <small class="muted text-danger"><?= form_error('dari'); ?></small>
                      </div>
                        
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="sampai">Nama Pelanggan</label>
                          <input type="text" name="sampai" id="sampai" class="form-control">
                          <small class="muted text-danger"><?= form_error('sampai'); ?></small>
                        </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-primary mt-4"><i class="fas fa-eye"></i> Tampilkan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
	</section>

    <?php if (!empty($transactions)): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Transaksi</th>
                <th>Durasi Rental</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?php echo $transaction->transaction_id; ?></td>
                    <td><?php echo $transaction->customer_name; ?></td>
                    <td><?php echo $transaction->transaction_date; ?></td>
                    <td><?php echo $transaction->duration; ?> hari</td>
                    <td><?php echo $transaction->price; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data transaksi yang sesuai dengan filter.</p>
    <?php endif; ?>
    
</div>