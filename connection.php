<?php
    class connection{
        private $server="localhost";
        private $user="root";
        private $password="abc123";
        private $connection="";

        // Initialize connection to database
        public function __construct(){

            try{
                $this->connection = new PDO("mysql:host=$this->server;dbname=album",$this->user,$this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                return "connection failure".$e;
            }

        }

        public function execute($sql){ // insert/delete/update data from database
            $this->connection->exec($sql);
            return $this->connection->lastInsertId();
        }

        public function query($sql) { // function to retrieve all registers
            $statement=$this->connection->prepare($sql);
            $statement->execute();
            return $statement->fetchAll();
        }

    }
?>