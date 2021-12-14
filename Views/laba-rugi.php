<main class="mb-footer">
    <div class="container">
        <h3 class="title py-4 d-flex align-items-center">Laporan Laba-Rugi (1 Bulan)</h3>
        <div class="card transactions">
            <div class="card-body p-5">
                <h4>Griya Jahit SF</h4>
                <h5 class="mb-4">Periode <?= $periode; ?></h5>
                <div class="my-3">
                    <!-- PENDAPATAN START -->
                    <h6 class="bg-light border-top fw-bold py-2 ps-3 mb-0">Pendapatan</h6>
                    <div class="d-flex py-2 border-top">
                        <div class="ms-5 w-id">4-40000</div>
                        <div>Service Revenue</div>
                        <div class="ms-auto me-5">Rp3000000</div>
                    </div>
                    <div class="d-flex py-2 border-top">
                        <div class="ms-5 w-id">4-40010</div>
                        <div>Sale Revenue</div>
                        <div class="ms-auto me-5">Rp2000000</div>
                    </div>
                    <div class="d-flex py-2 border-top border-secondary">
                        <div class="ms-5">Total dari Pendapatan</div>
                        <strong class="ms-auto me-5">Rp<?= $total_pendapatan; ?></strong>
                    </div>
                    <!-- PENDAPATAN START -->
                    <!-- BEBAN START -->
                    <h6 class="bg-light border-top fw-bold py-2 ps-3 mb-0">Beban</h6>
                    <div class="d-flex py-2 border-top">
                        <div class="ms-5 w-id">5-50000</div>
                        <div>Cost of Sales</div>
                        <div class="ms-auto me-5">Rp1500000</div>
                    </div>
                    <div class="d-flex py-2 border-top">
                        <div class="ms-5 w-id">5-50010</div>
                        <div>Operational Expense</div>
                        <div class="ms-auto me-5">Rp1000000</div>
                    </div>
                    <div class="d-flex py-2 border-top border-bottom border-secondary">
                        <div class="ms-5">Total dari Beban</div>
                        <strong class="ms-auto me-5">Rp<?= $total_beban; ?></strong>
                    </div>
                    <div class="d-flex py-2 border-bottom">
                        <h6 class="fw-bold ms-3 mb-0 mt-1">Laba (Rugi)</h6>
                        <strong class="ms-auto me-5">Rp<?= $total_laba_rugi;?></strong>
                    </div>
                    <!-- BEBAN END -->
                </div>
            </div>
        </div>
    </div>
</main>