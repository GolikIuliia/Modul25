<?php
class Controller_Galery extends Controller
{
 function action_index()
 { 
  $this->view->generate('galery_view.php', 'template_view.php');
 }
 public function Receive(){
    
 }
}