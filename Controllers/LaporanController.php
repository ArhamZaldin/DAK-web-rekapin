<?php
    class C_Laporan extends C_Main {
        static function showLaporan() {
            $master = 'laporan';
            $title = 'Laporan'.parent::$brand;
            include_once parent::$master_link;
        }
    }

    class C_LabaRugi extends C_Main {
        static function showLabaRugi() {
            $master = 'laba-rugi';
            $title = 'Laporan Laba-Rugi'.parent::$brand;
            $model_dashboard = new M_Dashboard();
            $data_pemasukan = $model_dashboard->getDaftarTransaksiPemasukan();
            $data_pengeluaran = $model_dashboard->getDaftarTransaksiPengeluaran();
            $model_akun = new M_Akun();
            $periode = '31-12-2021';
            $total_pendapatan = 20000;
            // $total_pendapatan = $model_akun->sumPemasukan()[0][0];
            $total_beban = 10000;
            // $total_beban = $model_akun->sumPengeluaran()[0][0];
            $total_akhir = $total_pendapatan - $total_beban;
            $total_laba_rugi = $total_akhir < 0 ? '('.($total_akhir * (-1)).')' : $total_akhir;
            include_once parent::$master_link;
        }
    }
?>