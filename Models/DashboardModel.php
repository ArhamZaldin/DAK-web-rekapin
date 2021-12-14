<?php
    class M_Dashboard extends M_Main {
        function getDaftarTransaksiPemasukan() {
            $query = 'SELECT * FROM pemasukan';
            $statement = $this->db->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        }

        function getDaftarTransaksiPengeluaran() {
            $query = 'SELECT * FROM pengeluaran';
            $statement = $this->db->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        }

        function setPemasukan($akun_pemasukan, $tanggal_pemasukan, $deskripsi, $kategori, $akun_saldo, $total) {
            try {
                $query_add = 'INSERT INTO layanan VALUES (null, ?, ?, ?, ?, ?, ?)';
                $statement_add = $this->db->prepare($query_add);
                $statement_add->execute([$akun_pemasukan, $tanggal_pemasukan, $deskripsi, $kategori, $akun_saldo, $total]);
                $modal_akun = new M_Akun();
                $cur_saldo = $modal_akun->getAkun($akun_saldo)[3];
                $final_saldo = $cur_saldo + $total;
                $query_saldo = "UPDATE daftar_akun SET saldo_akun='$final_saldo' WHERE kode_akun=$akun_saldo";
                $statement_saldo = $this->db->prepare($query_saldo);
                $statement_saldo->execute();
                // if ($akun_saldo == "1-10001") {
                //     $cur_cash = $modal_akun->getAkun($akun_saldo)[3];
                //     // $cur_bank = $modal_akun->getAkun("1-10002")[3];
                //     $final_cash = $cur_cash + $total;
                //     // $final_bank = $cur_bank - $total;
                //     $query_cash = "UPDATE daftar_akun SET saldo_akun='$final_cash' WHERE kode_akun=$akun_saldo";
                //     // $query_bank = "UPDATE daftar_akun SET saldo_akun='$final_bank' WHERE kode_akun='1-10002'";
                //     $statement_cash = $this->db->prepare($query_cash);
                //     // $statement_bank = $this->db->prepare($query_bank);
                //     $statement_cash->execute();
                //     // $statement_bank->execute();
                // } else {
                //     $cur_bank = $modal_akun->getAkun($akun_saldo)[3];
                //     // $cur_cash = $modal_akun->getAkun("1-10001")[3];
                //     $final_bank = $cur_bank + $total;
                //     // $final_cash = $cur_cash - $total;
                //     $query_bank = "UPDATE daftar_akun SET saldo_akun='$final_bank' WHERE kode_akun='$akun_saldo";
                //     // $query_cash = "UPDATE daftar_akun SET saldo_akun='$final_cash' WHERE kode_akun='1-10001'";
                //     $statement_bank = $this->db->prepare($query_bank);
                //     // $statement_cash = $this->db->prepare($query_cash);
                //     $statement_bank->execute();
                //     // $statement_cash->execute();
                // }
                return true;
            } catch (\Throwable $e) {
                return $e->getMessage();;
            }
        }
    }
?>