<?php
class Controller_galery extends Controller
{
    function index()
    {   
        $data = array(); 
        $data['title'] = 'Галерея'; 

        $this->view->generate('galery_view.php', $data);
    }
    public function Receive()
    {
    
    }
}