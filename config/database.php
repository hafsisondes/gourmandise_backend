<?php 

header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
    
    class Database {
        private $host = "DESKTOP-UK0MBQ8";
        private $database_name = "gourmandise_evaluation";
        private $username = "admin";
        private $password = "Admin+123";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("sqlsrv:server=DESKTOP-UK0MBQ8;Database=" . $this->database_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               // $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>