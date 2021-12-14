<main class="mb-footer">
    <div class="container">
        <h3 class="title my-4 d-flex align-items-center">Tambah Catatan Pemasukan</h3>
        <form action="Controllers/PemasukanNewFormHandler.php" method="post">
            <div class="row mt-3 g-4">
                <div class="col-auto">
                    <label class="form-label" for="akun-pemasukan">Akun Pemasukan</label>
                    <select class="form-select" name="akun-pemasukan" id="akun-pemasukan">
                        <?php 
                            for ($i=0; $i < count($data); $i++) {
                                if ($data[$i][2] == "Akun Piutang" or $data[$i][2] == "Aktiva Lancar Lainnya" or $data[$i][2] == "Aktiva Tetap" or $data[$i][2] == "Aktiva Lainnya" or $data[$i][2] == "Ekuitas" or $data[$i][2] == "Pendapatan" or $data[$i][2] == "Pendapatan Lainnya") {
                        ?>
                        <option value="<?= $data[$i][0]; ?>">(<?= $data[$i][0]; ?>) - <?= $data[$i][1]; ?> (<?= $data[$i][2]; ?>)</option>
                        <?php
                            }}
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <label class="form-label" for="tanggal-pemasukan">Tanggal Transaksi</label>
                    <input class="form-control" type="date" name="tanggal-pemasukan" id="tanggal-pemasukan">
                </div>
            </div>
            <div class="row mt-3 g-4">
                <div class="col">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder='Misal: "Pesanan seragam anak SD"' required>
                </div>
                <div class="col-2">
                    <label class="form-label" for="kategori">Kategori</label>
                    <select class="form-select" name="kategori" id="kategori">
                        <option value="Upah">Upah</option>
                        <option value="Hibah">Hibah</option>
                        <option value="Piutang">Piutang</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="col-3">
                    <label class="form-label" for="akun-saldo">Dana Masuk Ke</label>
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
                <div class="col">
                    <label class="form-label" for="total">Total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" name="total" id="total" placeholder="Misal: 10000" required>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-1 border-top border-5">
                <div class="col-auto mt-4">
                    <label class="form-label" for="bukti">Unggah Bukti Transaksi</label>
                    <input class="form-control" type="file" name="bukti" id="bukti">
                </div>
                <div class="col-auto mt-auto ms-auto">
                    <a class="btn btn-warning link-light me-3" href="index.php"><i class="fas fa-chevron-left me-2"></i>Kembali</a>
                    <button class="btn btn-info" type="submit"><i class="far fa-save me-2"></i>Simpan Pemasukan</button>
                </div>
            </div>
        </form>
    </div>
</main>