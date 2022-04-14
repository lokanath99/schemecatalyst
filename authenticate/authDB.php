<?php

    require 'C:\xampp\htdocs\FP\vendor\autoload.php';
    class dbManager{
        private $conn;
        private $connection_string = 'mongodb://localhost:27017'; 
        public function dbConnect(){
            try {
                $this->conn = new MongoDB\Driver\Manager($this->connection_string);
                return $this->conn;
            }
            catch (Throwable $e) {
                // catch throwables when the connection is not a success
                echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;
                return $e->getMessage();
            }            
        }
    }    
        

?>