<?php
    class C_Kas extends C_Main {
        public $model;

        static function showKas() {
            $master = 'kas';
            $title = 'Kas & Bank'.parent::$brand;
            $model_kas = new M_Kas();
            $data_transfer = $model_kas->getDaftarTransfer();
            $model_akun = new M_Akun();
            include_once parent::$master_link;
        }

        static function getTotalKas() {
            try {
                $model = new M_Akun();
                $data = $model->getAkun("1-10001")[3];
                $total_kas = 'Rp'.$data;
                return $total_kas;
            } catch (\Throwable $e) {
                return $e->getMessage();
            }
        }

        static function getTotalBank() {
            try {
                $model = new M_Akun();
                $data = $model->getAkun("1-10002")[3];
                $total_kas = 'Rp'.$data;
                return $total_kas;
            } catch (\Throwable $e) {
                return $e->getMessage();
            }
        }
    }

    class C_KasForm extends C_Main {
        static function showKasForm() {
            $master = 'kas-form';
            $title = 'Transfer Saldo'.parent::$brand;
            $model = new M_Akun();
            $data = $model->getDaftarAkun();
            parent::$today_date = parent::$today;
            include_once parent::$master_link;
        }
    }
?>