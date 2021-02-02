<?php
require './resource/database.php';
class auth{
    public $DB;
    public function __construct()
    {
        $this->DB = new Database();
    }

    public function register($trn_date, $name, $username, $email, $pass) {
        
        
        return $checkEmail = $this->DB->select("select * from users where email = ? ","s",array($email));
        // print_r($checkEmail);
        if($checkEmail == true){
            $alert = array(
                'errorMsg' => 'User AlLready Exist'
            );
        } else {
            // $pass = md5($pass);
            // $query = "Insert into users (trn_date, name, username, email, password) values (?,?,?,?,?)";
            // $paramType = 'sssss';
            // $paramArray = array($trn_date, $name, $username, $email, $pass);
            // return $this->DB->insert($query, $paramType, $paramArray);
        }
    } 

    public function login($email, $pass)
    {
        $pass = md5($pass);
        $users = $this->DB->select("Select * from users where email= ? and password= ? ","ss",array($email,$pass));
        if($users == true){
            $user = $users[0];
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];
            return true;
        }{
            return $alert = array(
                'errorMsg' => 'User Not Found'
            );
        }
    }
    public function session() {  
        if (isset($_SESSION['login'])) {  
            return $_SESSION['login'];  
        }  
    }

    public function logout()
    {
        session_unset();
    }

}