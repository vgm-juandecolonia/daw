<?php
    class Connection {
        public static function start() {
            try {
                $system = "mysql";
                $host = "localhost";
                $port = "3306";
                $db = "clasificacion";
                $user = "root";
                $password = "root";

                $dbcon = new PDO($system . ":host=" . $host . ":" . $port . ";dbname=" . $db, $user, $password);
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dbcon->exec("SET CHARACTER SET UTF8");
            } catch (Exception $err) {
                die("Error: " . $err->getMessage());
            }
            return $dbcon;
        }
    }
?>