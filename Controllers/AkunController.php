<?php
    class C_Akun extends C_Main {
        static function showAkun() {
            $master = 'akun';
            $title = 'Daftar Akun'.parent::$brand;
            $model = new M_Akun();
            $data = $model->getDaftarAkun();
            include_once parent::$master_link;
        }
    }
?>