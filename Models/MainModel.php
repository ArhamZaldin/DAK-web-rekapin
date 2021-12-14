<?php
    require_once "Databases/database.php";

    class M_Main {
        public $db;
        
        function __construct() {
            $this->db = DB::connectDB();
        }
    }
?>