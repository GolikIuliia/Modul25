<?php
class Controller_Reg extends Controller
{
    function index()
    { 
        $data = array(); 
        $data['title'] = 'Регистрация';  

        $this->view->generate('reg_view.php', $data);
    }

    function proccess_reg() // Можем сюда спрятать нашу обработку регистрации
    { 
        if($_SERVER['REQUEST_METHOD'] !== 'POST') return; // Но принимать будем только POST; 

        file_put_contents("reg_test.txt", var_export($_POST, true), FILE_APPEND | LOCK_EX);
    }
}

/*
session_start();
var_dump($_POST);

function register(array $data)
{
$values=[
    'id' => uniqid(),
    'username' => $data['username'],
    'email' => $data['email'],
    'password' => password_hash($data['password'], PASSWORD_DEFAULT),
    'date' => (new DataTime()) -> format[ 'Y-m-d H:i:s']
];
return $values;
}

$user = register($_POST);
file_put_contents("reg.txt", var_export($user, true), FILE_APPEND | LOCK_EX);

//var_dump($user);
setLoginStatus($user);
function setLoginStatus(array $data){
    $token = password_hash($data['email'],  PASSWORD_DEFAULT);
    $_SESSION['username'] = $data['username'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['date'] = $data['date'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['token'] = $token;
    $_SESSION['loggedin'] = true;
    storeUserToCookies();
}

function storeUserToCookies(){
  setcookie(
    'login',
    $_SESSION['token'],
    [
       'expires' => time() + 3600,
       'samesites' => 'Lax'
    ]);
}
?>
*/