<main class="mb-footer">
    <div class="container">
        <h3 class="title my-4 d-flex align-items-center">Ubah Catatan Pengeluaran <?= $id_transaksi; ?></h3>
        <form action="">
            <div class="row mt-3 g-4">
                <div class="col-auto">
                    <label class="form-label" for="akun-pengeluaran">Akun Pengeluaran</label>
                    <select class="form-select" name="akun-pengeluaran" id="akun-pengeluaran">
                        <option value="5-50000">(5-50000) - Cost of Sales (Harga Pokok Penjualan)</option>
                        <option value="5-50100" selected>(5-50100) - Purchase Discounts (Harga Pokok Penjualan)</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="tanggal-pengeluaran">Tanggal Transaksi</label>
                    <input class="form-control" type="date" name="tanggal-pengeluaran" id="tanggal-pengeluaran" value="<?= $tanggal_transaksi; ?>">
                </div>
            </div>
            <div class="row mt-3 g-4">
                <div class="col">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder='Misal: "Beli kain"' value="<?= $deskripsi; ?>" required>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="kategori">Kategori</label>
                    <select class="form-select" name="kategori" id="kategori">
                        <option value="Listrik (kWh)">Listrik (kWh)</option>
                        <option value="BBM (liter)">BBM (liter)</option>
                        <option value="Kain (meter)">Kain (meter)</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="akun-saldo">Dana Diambil Dari</label>
                    <select class="form-select" name="akun-saldo" id="akun-saldo">
                        <option value="1-10001">(1-10001) - Cash</option>
                        <option value="1-10002" selected>(1-10002) - Bank Account</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="kuantitas">Kuantitas</label>
                    <input  class="form-control" type="number" min="0" name="kuantitas" id="kuantitas" placeholder="Misal: 2" value="<?= $kuantitas; ?>" oninput=countTotal() required>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="satuan">Harga Satuan</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" name="satuan" id="satuan" placeholder="Misal: 10000" value="<?= $harga_satuan; ?>" oninput=countTotal() required>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-1 border-top border-5">
                <div class="d-flex mt-4">
                    <h4 class="flex-grow-1 text-end me-5">Total</h4>
                    <h4 class="ms-5" id="total">Rp<?= $total_transaksi; ?></h4>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="bukti">Unggah Bukti Transaksi</label>
                    <input class="form-control" type="file" name="bukti" id="bukti">
                </div>
                <div class="col-auto mt-auto ms-auto">
                    <a class="btn btn-warning link-light me-3" href="web.php?route=detail-transaksi&id-transaksi=<?= $id_transaksi; ?>"><i class="fas fa-chevron-left me-2"></i>Kembali</a>
                    <button class="btn btn-info" type="button"><i class="far fa-save me-2"></i>Simpan Pengeluaran</button>
                </div>
            </div>
        </form>
    </div>
</main>