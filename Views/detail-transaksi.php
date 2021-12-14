<main class="mb-footer">
    <div class="container">
        <h3 class="title py-4 d-flex align-items-center">Detail Transaksi</h3>
        <div class="d-flex justify-content-between bg-light rounded-3 p-4">
            <div class="me-5">
                <h5 class="text-secondary m-0">ID Transaksi</h5>
                <h3 class="m-0"><?= $id_transaksi; ?></h3>
            </div>
            <div>
                <h4 class="text-secondary m-0">Total Transaksi</h4>
                <h3 class="m-0 text-break">Rp<?= $total_transaksi; ?></h3>
            </div>                    
        </div>
        <div class="row justify-content-between border-top border-bottom border-5 my-4 pt-4">
            <div class="col">
                <div class="mb-4">
                    <h5>Tanggal Transaksi</h5>
                    <span><?= $tanggal_transaksi; ?></span>
                </div>
                <div class="mb-4">
                    <h5>Akun <?= $tipe_transaksi; ?></h5>
                    <span><?= $akun_transaksi; ?></span>
                </div>
            </div>
            <div class="col">
                <div class="mb-4">
                    <h5>Deskripsi</h5>
                    <span><?= $deskripsi; ?></span>
                </div>
                <div class="mb-4">
                    <h5>Kategori</h5>
                    <span><?= $kategori; ?></span>
                </div>
            </div>
            <div class="col">
                <div class="mb-4">
                    <h5>Dana <?= $tipe_dana; ?></h5>
                    <span><?= $akun_dana; ?></span>
                </div>
                <div class="mb-4">
                    <h5>Kuantitas</h5>
                    <span><?= $kuantitas; ?></span>
                </div>
                <div class="mb-4">
                    <h5>Harga Satuan</h5>
                    <span>Rp<?= $harga_satuan; ?></span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap">
            <div>
                <h5>Bukti Transaksi</h5>
                <span class="w-50"><?=  $bukti_transaksi; ?></span>
            </div>
            <div>
                <a class="btn btn-warning link-light" href="index.php"><i class="fas fa-chevron-left me-2"></i>Kembali</a>
                <a class="btn btn-danger mx-3" href="web.php?route=delete-transaksi&id-transaksi=<?= $id_transaksi; ?>"><i class="fas fa-trash me-2"></i>Hapus</a>
                <a class="btn btn-info" href="web.php?route=<?= $tipe_transaksi; ?>-change-form&id-transaksi=<?= $id_transaksi; ?>"><i class="fas fa-edit me-2"></i>Ubah</a>
            </div>
        </div>
    </div>
</main>