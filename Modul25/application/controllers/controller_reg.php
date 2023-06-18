<?php
class Controller_Reg extends Controller
{
    function index()
    { 
        $data = array(); 
        $data['title'] = 'Регистрация';  

        $this->view->generate('reg_view.php', $data);
    }
}