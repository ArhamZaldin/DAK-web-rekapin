<main class="mb-footer">
    <div class="container">
        <h3 class="title py-4 d-flex align-items-center">Daftar Akun</h3>
        <div class="card transactions">
            <div class="card-body p-5">
                <table class="table table-hover my-3">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Akun</th>
                            <th scope="col">Nama Akun</th>
                            <th scope="col">Kategori Akun</th>
                            <th scope="col-1">Saldo Akun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            for ($i=0; $i < count($data); $i++) { 
                        ?>
                        <tr>
                            <th scope="row"><?= $i+1; ?></th>
                            <td><?= $data[$i][0]; ?></td>
                            <td><?= $data[$i][1]; ?></td>
                            <td><?= $data[$i][2]; ?></td>
                            <td>Rp<?= $data[$i][3]; ?></td>
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