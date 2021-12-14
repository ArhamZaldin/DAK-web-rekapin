<?php
    class M_Akun extends M_Main {
        function getDaftarAkun() {
            $query = 'SELECT * FROM daftar_akun';
            $statement = $this->db->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        }
        
        // INPUT DAFTAR AKUN START
        function setDaftarAkun($kode_akun, $nama_akun, $kategori_akun, $saldo_akun) {
            $query = 'INSERT INTO daftar_akun VALUES (?, ?, ?, ?)';
            $statement = $this->db->prepare($query);
            $statement->execute([$kode_akun, $nama_akun, $kategori_akun, $saldo_akun]);
        }
        // INPUT DAFTAR AKUN END

        function getAkun($kode_akun) {
            $query = 'SELECT * FROM daftar_akun WHERE kode_akun = ?';
            $statement = $this->db->prepare($query);
            $statement->execute([$kode_akun]);
            return $statement->fetch();
        }

        function sumPemasukan() {
            $query = 'SELECT SUM(total) FROM pemasukan';
            $statement = $this->db->prepare($query);
            $statement->execute();
            return $statement->fetch();
        }

        function sumPengeluaran() {
            $query = 'SELECT SUM(total * kuantitas) FROM pengeluaran';
            $statement = $this->db->prepare($query);
            $statement->execute();
            return $statement->fetch();
        }
    }
?>