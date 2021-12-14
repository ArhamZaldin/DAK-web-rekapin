<main class="mb-footer">
    <div class="container">
        <h3 class="title py-4 d-flex align-items-center">Kas & Bank</h3>
        <div class="row summary">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center bg-secondary text-white">
                        <strong>Jumlah Seluruh Saldo</strong>
                    </div>
                    <div class="card-body py-4 px-5">
                        <div class="text-secondary">Total</div>
                        <div class="fs-3 fw-bold text-break"><?= parent::getTotalSaldo(); ?></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center bg-secondary text-white">
                        <strong>Jumlah Saldo Kas</strong>
                    </div>
                    <div class="card-body py-4 px-5">
                        <div class="text-secondary">Total</div>
                        <div class="fs-3 fw-bold text-break"><?= self::getTotalKas(); ?></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center bg-secondary text-white">
                        <strong>Jumlah Saldo Bank</strong>
                    </div>
                    <div class="card-body py-4 px-5">
                        <div class="text-secondary">Total</div>
                        <div class="fs-3 fw-bold text-break"><?= self::getTotalBank(); ?></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card transactions">
            <div class="card-body p-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="m-0">Riwayat Transfer</h4>
                    <a class="btn btn-info" href="web.php?route=kas-form">Transfer Saldo</a>
                </div>
                <table class="table table-hover my-3">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nomor ID</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Transfer Dari</th>
                            <th scope="col">Setor Ke</th>
                            <th scope="col">Total Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            for ($i=0; $i < count($data_transfer); $i++) { 
                        ?>
                        <tr>
                            <th scope="row"><?= $i+1; ?></th>
                            <td>trf-<?= $data_transfer[$i][0]; ?></td>
                            <td><?= $data_transfer[$i][1]; ?></td>
                            <td>(<?= $data_transfer[$i][2]; ?>) - <?= $model_akun->getAkun($data_transfer[$i][2]) == '1-10001' ? 'Cash' : 'Bank Account'; ?></td>
                            <td>(<?= $data_transfer[$i][3]; ?>) - <?= $model_akun->getAkun($data_transfer[$i][3]) == '1-10001' ? 'Cash' : 'Bank Account'; ?></td>
                            <td>Rp<?= $data_transfer[$i][4]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>