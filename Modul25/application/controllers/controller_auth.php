<?php
class Controller_auth extends Controller
{
    function index()
    { 
        $data = array(); 
        $data['title'] = 'Авторизация';  

        $this->view->generate('auth_view.php', $data);
    }

    function proccess_reg() // Можем сюда спрятать нашу обработку регистрации
    { 
        if($_SERVER['REQUEST_METHOD'] !== 'POST') return; // Но принимать будем только POST; 

        
    }
}