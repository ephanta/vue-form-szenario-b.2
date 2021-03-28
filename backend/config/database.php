<?php
class Database{
    private $host = "localhost";
    private $db_name = "vue-form";
    private $username = "root";
    private $password = "";
    public $db;
    public function getConnection(){
        return $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    }
}
?>