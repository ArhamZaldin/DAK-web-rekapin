<?php
    class M_Kas extends M_Main {
        function getDaftarTransfer() {
            $query = 'SELECT * FROM kas_bank';
            $statement = $this->db->prepare($query);
            $statement->execute();
            return $statement->fetchAll();
        }
    }
?>