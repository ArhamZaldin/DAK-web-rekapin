<?php
    class C_Dashboard extends C_Main {
        static function showDashboard() {
            $master = 'dashboard';
            $title = 'Dashboard'.parent::$brand;
            $model = new M_Dashboard();
            $data_pemasukan = $model->getDaftarTransaksiPemasukan();
            $data_pengeluaran = $model->getDaftarTransaksiPengeluaran();
            include_once parent::$master_link;
        }
        static function getTotalPemasukan() {
            $total_pemasukan = 'Rp'.'80000000';
            return $total_pemasukan;
        }

        static function getTotalPengeluaran() {
            $total_pengeluaran = 'Rp'.'50000000';
            return $total_pengeluaran;
        }
    }

    class C_PemasukanNewForm extends C_Main {
        static function showPemasukanNewForm() {
            $master = 'pemasukan-new-form';
            $title = 'Catat Pemasukan'.parent::$brand;
            $model = new M_Akun();
            $data = $model->getDaftarAkun();
            parent::$today_date = parent::$today;
            include_once parent::$master_link;
        }

        static function setPemasukanNewForm($akun_pemasukan, $tanggal_pemasukan, $deskripsi, $kategori, $akun_saldo, $total){
            $model = new M_Dashboard();
            $data_form = $model->setPemasukan($akun_pemasukan, $tanggal_pemasukan, $deskripsi, $kategori, $akun_saldo, $total);
            if ($data_form == true) {
                echo "<script>alert('Transaksi berhasil ditambahkan.');</script>";
            } else {
                echo "<script>alert('$data_form');</script>";
            }
            header("Location: index.php");
        }
    }

    class C_PengeluaranNewForm extends C_Main {
        static function showPengeluaranNewForm() {
            $master = 'pengeluaran-new-form';
            $title = 'Catat Pengeluaran'.parent::$brand;
            $model = new M_Akun();
            $data = $model->getDaftarAkun();
            parent::$today_date = parent::$today;
            include_once parent::$master_link;
        }
    }

    class C_DetailTransaksi extends C_Main {
        static function showDetailTransaksi($id_transaksi) {
            $master = 'detail-transaksi';
            $title = 'Detail Transaksi'.parent::$brand;
            $tipe_transaksi = is_int(strpos($id_transaksi, "trm"))?"Pemasukan":"Pengeluaran";
            $tipe_dana = 'Masuk Ke';
            $total_transaksi = 100000;
            $tanggal_transaksi = '26-11-2021';
            $akun_transaksi = '(5-50000) - Cost of Sales (Harga Pokok Penjualan)';
            $deskripsi = 'Pesanan seragam anak SD';
            $kategori = 'Upah';
            $akun_dana = '(1-10001) - Cash';
            $kuantitas = '-';
            $harga_satuan = $total_transaksi;
            $bukti_transaksi = '-';
            // $bukti_transaksi = '<img src="../Assets/image/kaori_cecek.jpeg" alt="bukti-transaksi" width="50%">';
            include_once parent::$master_link;
        }

        static function delTransaksi($id_transaksi) {
            // $master = 'dashboard';
            // $title = 'Dashboard'.parent::$brand;
            echo "<script>alert('Transaksi ".$id_transaksi." berhasil dihapus.')</script>";
            header("Location: index.php");
            // include_once parent::$master_link;
        }
    }

    class C_PemasukanChangeForm extends C_Main {
        static function showPemasukanChangeForm($id_transaksi) {
            $master = 'pemasukan-change-form';
            $title = 'Ubah Detail Transaksi'.parent::$brand;
            $akun_transaksi = '';
            $tanggal_transaksi = '2021-11-26';
            $deskripsi = 'Pesanan seragam anak SD';
            $kategori = '';
            $akun_dana = '';
            $total_transaksi = 10000;
            include_once parent::$master_link;
        }
    }

    class C_PengeluaranChangeForm extends C_Main {
        static function showPengeluaranChangeForm($id_transaksi) {
            $master = 'pengeluaran-change-form';
            $title = 'Ubah Detail Transaksi'.parent::$brand;
            $akun_transaksi = '';
            $tanggal_transaksi = '2021-11-26';
            $deskripsi = 'Beli kain';
            $kategori = '';
            $akun_dana = '';
            $kuantitas = 2;
            $harga_satuan = 20000;
            $total_transaksi = $kuantitas*$harga_satuan;
            include_once parent::$master_link;
        }
    }
?>