<main class="mb-footer">
    <div class="container">
        <h3 class="title py-4 d-flex align-items-center">Transfer Saldo</h3>
        <form action="">
            <div class="row mt-3 g-4 flex-wrap">
                <div class="col">
                    <label class="form-label" for="tanggal-transfer">Tanggal Transfer</label>
                    <input class="form-control" type="date" name="tanggal-transfer" id="tanggal-transfer">
                </div>
                <div class="col">
                    <div class="col mb-4">
                        <label class="form-label" for="transfer-from">Transfer Dari</label>
                        <select class="form-select" name="transfer-from" id="transfer-from" onchange=toggleKas()>
                            <?php 
                                for ($i=0; $i < count($data); $i++) {
                                    if ($data[$i][1] == "Cash" or $data[$i][1] == "Bank Account") {
                            ?>
                            <option value="<?= $data[$i][0]; ?>" <?= $data[$i][0] == "1-10001" ? "selected" : ""; ?> >(<?= $data[$i][0]; ?>) - <?= $data[$i][1]; ?></option>
                            <?php
                                }}
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <label class="form-label w-100" for="transfer-to">Setor Ke <span class="badge bg-secondary">Auto</span></label>
                        <select class="form-select" name="transfer-to" id="transfer-to" disabled>
                            <?php 
                                for ($i=0; $i < count($data); $i++) {
                                    if ($data[$i][1] == "Cash" or $data[$i][1] == "Bank Account") {
                            ?>
                            <option value="<?= $data[$i][0]; ?>" <?= $data[$i][0] == "1-10002" ? "selected" : ""; ?> >(<?= $data[$i][0]; ?>) - <?= $data[$i][1]; ?></option>
                            <?php
                                }}
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label" for="total-transfer">Total Transfer</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" name="total-transfer" id="total-transfer" placeholder="Misal: 10000" required>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-1 border-top border-5">
                <div class="col-auto mt-4">
                    <label class="form-label" for="bukti">Unggah Bukti Transaksi</label>
                    <input class="form-control" type="file" name="bukti" id="bukti">
                </div>
                <div class="col-auto mt-auto ms-auto">
                    <a class="btn btn-warning link-light me-3" href="index.php?menu=kas"><i class="fas fa-chevron-left me-2"></i>Kembali</a>
                    <button class="btn btn-info" type="button"><i class="far fa-save me-2"></i>Simpan Pemasukan</button>
                </div>
            </div>
        </form>
    </div>
</main>