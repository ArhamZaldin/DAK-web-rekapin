<?php
    require_once "MainController.php";
    // if (isset($_POST['akun-pemasukan'], $_POST['tanggal-pemasukan'], $_POST['deskripsi'], $_POST['akun-saldo'], $_POST['total'])) {
    //     $akun_pemasukan = $_POST['akun-pemasukan'];
    //     $tanggal_pemasukan = $_POST['tanggal-pemasukan'];
    //     $deskripsi = $_POST['deskripsi'];
    //     $kategori = $_POST['kategori'];
    //     $akun_saldo = $_POST['akun-saldo'];
    //     $total = $_POST['total'];
    //     C_PemasukanNewForm::setPemasukanNewForm($akun_pemasukan, $tanggal_pemasukan, $deskripsi, $kategori, $akun_saldo, $total);
    // } else {
    //     echo "<script>Data yang dimasukkan salah!</script>";
    // }
    echo $_SERVER["PHP_SELF"];
?>