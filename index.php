<?php 
    require_once "Controllers/MainController.php";
    require_once "Controllers/DashboardController.php";
    require_once "Controllers/KasController.php";
    require_once "Controllers/LaporanController.php";
    require_once "Controllers/AkunController.php";

    switch (strtolower($_GET["menu"])) {
        case "dashboard":
            C_Dashboard::showDashboard();
            break;

        case "kas":
            C_Kas::showKas();
            break;

        case "laporan":
            C_Laporan::showLaporan();
            break;

        case "akun":
            C_Akun::showAkun();
            break;
        
        default:
            C_Dashboard::showDashboard();
            break;
    }
?>