<?php 
    require_once "Controllers/MainController.php";
    require_once "Controllers/DashboardController.php";
    require_once "Controllers/KasController.php";
    require_once "Controllers/LaporanController.php";
    require_once "Controllers/AkunController.php";

    switch (strtolower($_GET["route"])) {
        // DASHBOARD PAGE START
        case "pemasukan-new-form":
            C_PemasukanNewForm::showPemasukanNewForm();
            break;

        case "pengeluaran-new-form":
            C_PengeluaranNewForm::showPengeluaranNewForm();
            break;

        case "detail-transaksi":
            C_DetailTransaksi::showDetailTransaksi(strtolower($_GET["id-transaksi"]));
            break;

        case "pemasukan-change-form":
            C_PemasukanChangeForm::showPemasukanChangeForm(strtolower($_GET["id-transaksi"]));
            break;

        case "pengeluaran-change-form":
            C_PengeluaranChangeForm::showPengeluaranChangeForm(strtolower($_GET["id-transaksi"]));
            break;

        case "delete-transaksi":
            C_DetailTransaksi::delTransaksi(strtolower($_GET["id-transaksi"]));
            break;
        // DASHBOARD PAGE END
        
        // KAS PAGE START
        case "kas-form":
            C_KasForm::showKasForm();
            break;
        // KAS PAGE START

        // LAPORAN PAGE START
        case "laba-rugi":
            C_LabaRugi::showLabaRugi();
            break;
        // LAPORAN PAGE END

        // KESALAHAN DB START
        case "failed":
            C_Main::showFailed($_GET["message"]);
            break;
        // KESALAHAN DB END

        default:
            C_Main::showMaintenance();
            break;
    }
?>