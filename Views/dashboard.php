<main class="mb-footer">
    <div class="container">
        <h3 class="title py-4 d-flex align-items-center">Dashboard</h3>
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
                        <strong>Pemasukan Bulan Ini</strong>
                    </div>
                    <div class="card-body py-4 px-5">
                        <div class="text-secondary">Total</div>
                        <div class="fs-3 fw-bold text-break"><?= self::getTotalPemasukan(); ?></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center bg-secondary text-white">
                        <strong>Pengeluaran Bulan Ini</strong>
                    </div>
                    <div class="card-body py-4 px-5">
                        <div class="text-secondary">Total</div>
                        <div class="fs-3 fw-bold text-break"><?= self::getTotalPengeluaran() ?></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card transactions">
            <div class="card-body p-5">
                <div class="d-flex justify-content-between flex-wrap mb-4">
                    <h4 class="card-title w-100 mb-4">Daftar Transaksi</h4>
                    <div class="card transaction">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Pemasukan</h5>
                                <a class="btn btn-info" href="web.php?route=pemasukan-new-form">Tambah Pemasukan</a>
                            </div>
                            <table class="table table-hover my-3">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nomor ID</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        for ($i=0; $i < count($data_pemasukan); $i++) { 
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i+1; ?></th>
                                        <td><a href="web.php?route=detail-transaksi&id-transaksi=trm-<?= $data_pemasukan[$i][0]; ?>">trm-<?= $data_pemasukan[$i][0]; ?></a></td>
                                        <td><?= $data_pemasukan[$i][2]; ?></td>
                                        <td><?= $data_pemasukan[$i][4]; ?></td>
                                        <td>Rp<?= $data_pemasukan[$i][6]; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card transaction">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>Pengeluaran</h5>
                                <a class="btn btn-danger" href="web.php?route=pengeluaran-new-form">Tambah Pengeluaran</a>
                            </div>
                            <table class="table table-hover my-3">
                                <thead class="table-info">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nomor ID</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        for ($i=0; $i < count($data_pengeluaran); $i++) { 
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i+1; ?></th>
                                        <td><a href="web.php?route=detail-transaksi&id-transaksi=trk-<?= $data_pengeluaran[$i][0]; ?>">trk-<?= $data_pengeluaran[$i][0]; ?></a></td>
                                        <td><?= $data_pengeluaran[$i][2]; ?></td>
                                        <td><?= $data_pengeluaran[$i][4]; ?></td>
                                        <td>Rp<?= $data_pengeluaran[$i][7]; ?></td>
                                        <td><?= $data_pengeluaran[$i][6]; ?></td>
                                        <td>Rp<?= $data_pengeluaran[$i][7] * $data_pengeluaran[$i][6]; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>