<?php 
  

  Class stdcrud{


        private $conn;


        public function__constractor{

            $host = "localhost";
            $username = "root";
            $password = "";
            $databaseName = "studentsoperation";
            $this->conn = new mysqli($host,$username,$password,$databaseName);
        }
        if(!$this->conn){
            echo "Database Connection Error" . $this->conn->connect_error;
        }
  }






?>