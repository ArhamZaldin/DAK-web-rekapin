<?php
    class DB {
        static $connect;

        static function connectDB() {
            $DB_hostname = 'mysql:host=localhost; dbname=rekapinDB';
            $DB_user = 'root';
            $DB_pass = '';
            try {
                self::$connect = new PDO($DB_hostname, $DB_user, $DB_pass);
                self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return self::$connect;
            } catch (PDOException $e) {
                $location = "Location: web.php?route=failed&message=".$e->getMessage();
                header($location);
            }
        }

        // static function connectDB() {
        //     if (!isset(self::$connect) or isset(self::$connect)) {
        //         $DB_hostname = 'mysql:host=localhost; dbname=rekapinDB';
        //         $DB_user = 'root';
        //         $DB_pass = '';
        //         try {
        //             self::$connect = new PDO($DB_hostname, $DB_user, $DB_pass);
        //             self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //             return self::$connect;
        //         } catch (PDOException $e) {
        //             $location = "Location: web.php?route=failed&message=".$e->getMessage();
        //             header($location);
        //         }
        //     }
        // }
    }
?>