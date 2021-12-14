<main class="mb-footer">
    <div class="container">
        <h3 class="title my-4 d-flex align-items-center">Tambah Catatan Pengeluaran</h3>
        <form action="">
            <div class="row mt-3 g-4">
                <div class="col-auto">
                    <label class="form-label" for="akun-pengeluaran">Akun Pengeluaran</label>
                    <select class="form-select" name="akun-pengeluaran" id="akun-pengeluaran">
                        <?php 
                            for ($i=0; $i < count($data); $i++) {
                                if ($data[$i][2] == "Persediaan" or $data[$i][2] == "Depresiasi & Amortisasi" or $data[$i][2] == "Akun Hutang" or $data[$i][2] == "Kewajiban Lancar Lainnya" or $data[$i][2] == "Harga Pokok Penjualan" or $data[$i][2] == "Beban" or $data[$i][2] == "Beban Lainnya") {
                        ?>
                        <option value="<?= $data[$i][0]; ?>">(<?= $data[$i][0]; ?>) - <?= $data[$i][1]; ?> (<?= $data[$i][2]; ?>)</option>
                        <?php
                            }}
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="tanggal-pengeluaran">Tanggal Transaksi</label>
                    <input class="form-control" type="date" name="tanggal-pengeluaran" id="tanggal-pengeluaran">
                </div>
            </div>
            <div class="row mt-3 g-4">
                <div class="col">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder='Misal: "Beli kain"' required>
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
                        <?php 
                            for ($i=0; $i < count($data); $i++) {
                                if ($data[$i][1] == "Cash" or $data[$i][1] == "Bank Account") {
                        ?>
                        <option value="<?= $data[$i][0]; ?>">(<?= $data[$i][0]; ?>) - <?= $data[$i][1]; ?></option>
                        <?php
                            }}
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="kuantitas">Kuantitas</label>
                    <input  class="form-control" type="number" min="0" name="kuantitas" id="kuantitas" placeholder="Misal: 2" oninput=countTotal() required>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="satuan">Harga Satuan</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" name="satuan" id="satuan" placeholder="Misal: 10000" oninput=countTotal() required>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-1 border-top border-5">
                <div class="d-flex mt-4">
                    <h4 class="flex-grow-1 text-end me-5">Total</h4>
                    <h4 class="ms-5" id="total">Rp0</h4>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="bukti">Unggah Bukti Transaksi</label>
                    <input class="form-control" type="file" name="bukti" id="bukti">
                </div>
                <div class="col-auto mt-auto ms-auto">
                    <a class="btn btn-warning link-light me-3" href="index.php"><i class="fas fa-chevron-left me-2"></i>Kembali</a>
                    <button class="btn btn-info" type="button"><i class="far fa-save me-2"></i>Simpan Pengeluaran</button>
                </div>
            </div>
        </form>
    </div>
</main>