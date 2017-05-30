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
    public $data;
    public $cat;
    public $qus;
    public $cate=0;

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
    public function users_profile($email){
        global $data;
        $query=$this->conn->query("select  *from signup where email='$email'");
        $row=mysqli_fetch_array($query);
        if($query->num_rows > 0){
            $this->data[]=$row;
        }
        return $data;
    }
    public function cat_show(){
        global $cat;
        $query=$this->conn->query("select  *from category");
        while($row=mysqli_fetch_array($query))
        {
            $this->cat[]=$row;
        }
        return $cat;
    }
    public function ques_show($qus){

        $query=$this->conn->query("select  *from questions where cat_id='$qus'");
        while($row=mysqli_fetch_array($query))
        {
            $this->qus[]=$row;
        }
        return $qus;

    }
    public function answer($data){
        $ans=implode(" ",$data);
        $right = 0;
        $wrong = 0;
        $no_answer = 0;
        $query=$this->conn->query("select  id,ans from questions where cat_id='".$_SESSION['cat']."'");
        while($qust=mysqli_fetch_array($query))
        {
            if($qust['ans']==$_POST[$qust['id']]){
                $right++;
            }
            elseif($_POST[$qust['id']]==4){
                $no_answer++;
            }
            else{
                $wrong++;
            }
        }
        $array=array();
        $array['right']=$right;
        $array['wrong']=$wrong;
        $array['no_answer']=$no_answer;
        return $array;
    }
    public function cat_shows(){

        $query=$this->conn->query("select * from category");
        while ($row=mysqli_fetch_all($query)){
            $this->cate[]=$row;

        }
        return $row;

    }
    public function add_quiz(){
        echo "run";
    }
}

new users;
