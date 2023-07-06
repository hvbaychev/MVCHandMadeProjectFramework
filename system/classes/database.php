<?php

class database {

    public $host = HOST;
    public $user = USER;
    public $database = DATABASE;
    public $password = PASSWORD;
    public $con;
    public $result;

    public function __construct(){
        try {
            $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Database connection successful.";
        } catch (PDOException $e) {
            echo "Database connection Error: " . $e->getMessage();
        }
    }
    
    // Insert into user (name, email, password) values ('hristo' , "hristo@mail.bg", "12312321")
    public function Query($qry, $params = []){
        if (empty($params)){
            $this->result = $this->con->prepare($qry);
            return $this->result->execute();
        }
        else{
            $this->result = $this->con->prepare($qry);
            return $this->result->execute($params);

        }
    }

    public function rowCount(){

        return $this->result->rowCount();
    }

    public function fetchAll(){
        return $this->result->fetchAll(PDO::FETCH_OBJ);

    }

    public function fetch(){
        return $this->result->fetch(PDO::FETCH_OBJ);
    }
}

?>