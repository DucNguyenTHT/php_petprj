<?php
    class database{
        public $host   = HOST;
        public $user   = USER;
        public $pass   = PASSWORD;
        public $DBname = DBNAME;
        public $conn;
        public $result;

        public function __construct(){
            try{
                $dsn = "mysql:host=$this->host;dbname=$this->DBname";
                return $this->conn = new PDO($dsn,$this->user,$this->pass);
            }catch(PDOException $e){
                echo "Database connection Erro: {$e->getMessage()}";
            }
        }

        public function Query($qry,$params = []){
            if(empty($params)){
                $this->result = $this->conn->prepare($qry);
                return $this->result->execute();
            }else{
                $this->result = $this->conn->prepare($qry);
                return $this->result->execute($params);
            }
        }

        public function rowCount(){
            return $this->result->rowCount();
        }

        public function fetchData(){
            return $this->result->fetchAll(PDO::FETCH_OBJ);
        }

        public function fetch(){
            return $this->result->fetch(PDO::FETCH_OBJ);
        }
    }