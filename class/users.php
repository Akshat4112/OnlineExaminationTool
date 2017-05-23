<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/23/2017
 * Time: 5:17 PM
 */
session_start();
class users{
    public $host ="localhost";
    public $username ="root";
    public $password ="";
    public $dbname ="oet";
    public $conn;

    public function __construct()
    {
        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->dbname);
        if($this->conn->connect_errno){
            die("Database Connection Failed"/$this->conn->connect_errno);
        }
    }
    public function signup($data){
        $this->conn->query($data);
        return true;
    }

    /**
     * @param $email
     * @param $pass
     * @return bool
     */
    public function signin($email, $pass){
        $query=$this->conn->query("select email,pass from signup where email='$email' AND pass='$pass'");
        mysqli_fetch_all($query);
        if($query->num_rows > 0){
                $_SESSION['email']=$email;
                return true;
        }else{
                return false;
        }
    }
    public function url($url){
        header("location:".$url);
    }
}

new users;
