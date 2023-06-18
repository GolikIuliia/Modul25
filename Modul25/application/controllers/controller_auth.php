<?php
require_once 'app/db.php'; 

class Controller_Auth extends Controller
{
    public $callback;  

    function index()
    { 
        $data = array(); 
        $data['title'] = 'Авторизация';  

        $this->view->generate('auth_view.php', $data);
    }

    function authorize() // Можем сюда спрятать нашу обработку регистрации
    { 
        if($_SERVER['REQUEST_METHOD'] !== 'POST') return; // Но принимать будем только POST; 

        $name = $_POST['name'];
        $password = $_POST['password'];              
        //$pass_hash=password_hash($password, PASSWORD_ARGON2ID);
        
        if(empty($name) || empty($password)) exit(); 
        $response = []; 
        $user=getUserByName($_POST['name']); 

        if(!isset($user['password']))exit();

        if(isset($user['password']) && password_verify($password, $user['password'])){
            $_SESSION["user.authed"] = true;
            $response["user.authed"] = true;
            $_SESSION["user.name"]=$name;
        } 
        else {
            $response["user.authed"] = false;
        
        }
        echo json_encode($response);   
    }
}