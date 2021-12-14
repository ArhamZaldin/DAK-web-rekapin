<main class="mb-footer">
    <div class="container">
        <h3 class="title my-4 d-flex align-items-center">Ubah Catatan Pemasukan "<?= $id_transaksi; ?>"</h3>
        <form action="">
            <div class="row mt-3 g-4">
                <div class="col-auto">
                    <label class="form-label" for="akun-pemasukan">Akun Pemasukan</label>
                    <select class="form-select" name="akun-pemasukan" id="akun-pemasukan">
                        <option value="5-50000">(5-50000) - Cost of Sales (Harga Pokok Penjualan)</option>
                        <option value="5-50100" selected>(5-50100) - Purchase Discounts (Harga Pokok Penjualan)</option>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="tanggal-pemasukan">Tanggal Transaksi</label>
                    <input class="form-control" type="date" name="tanggal-pemasukan" id="tanggal-pemasukan" value="<?= $tanggal_transaksi; ?>">
                </div>
            </div>
            <div class="row mt-3 g-4">
                <div class="col">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder='Misal: "Pesanan seragam anak SD"' value="<?= $deskripsi; ?>" required>
                </div>
                <div class="col-2">
                    <label class="form-label" for="kategori">Kategori</label>
                    <select class="form-select" name="kategori" id="kategori">
                        <option value="Upah">Upah</option>
                        <option value="Hibah" selected>Hibah</option>
                        <option value="Piutang">Piutang</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="col-3">
                    <label class="form-label" for="akun-saldo">Dana Masuk Ke</label>
                    <select class="form-select" name="akun-saldo" id="akun-saldo">
                        <option value="1-10001">(1-10001) - Cash</option>
                        <option value="1-10002" selected>(1-10002) - Bank Account</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label" for="total">Total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" name="total" id="total" placeholder="Misal: 10000" value="<?= $total_transaksi; ?>" required>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-1 border-top border-5">
                <div class="col-auto mt-4">
                    <label class="form-label" for="bukti">Unggah Bukti Transaksi</label>
                    <input class="form-control" type="file" name="bukti" id="bukti">
                </div>
                <div class="col-auto mt-auto ms-auto">
                    <a class="btn btn-warning link-light me-3" href="web.php?route=detail-transaksi&id-transaksi=<?= $id_transaksi; ?>"><i class="fas fa-chevron-left me-2"></i>Kembali</a>
                    <button class="btn btn-info" type="button"><i class="far fa-save me-2"></i>Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</main>