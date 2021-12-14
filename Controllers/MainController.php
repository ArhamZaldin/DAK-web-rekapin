<?php
    require_once "Models/MainModel.php";
    require_once "Models/DashboardModel.php";
    require_once "Models/KasModel.php";
    require_once "Models/LaporanModel.php";
    require_once "Models/AkunModel.php";

    class C_Main {
        static $master_link = 'Views/layouts/master.php';
        static $brand = ' | REKAPIN';
        // TANGGAL START
        static $today = 'onload=todayDate()';
        static $today_date = '';
        // TANGGAL END
        // LINK MENU START
        static $dashboard_link = 'index.php?menu=dashboard';
        static $kas_link = 'index.php?menu=kas';
        static $laporan_link = 'index.php?menu=laporan';
        static $akun_link = 'index.php?menu=akun';
        // LINK MENU END

        static function showMaintenance() {
            $master = 'maintenance';
            $title = 'Halaman Maintenance!'.self::$brand;
            include_once self::$master_link;
        }

        static function showFailed($message) {
            $master = 'failed';
            $title = 'Kesalahan!'.self::$brand;
            include_once self::$master_link;
        }

        static function getTotalSaldo() {
            $model = new M_Akun();
            $cash = $model->getAkun("1-10001")[3];
            $bank = $model->getAkun("1-10002")[3];
            $data = $bank + $cash;
            $total_saldo = 'Rp'.$data;
            return $total_saldo;
        }
    }
?>