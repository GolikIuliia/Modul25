<?php
class Controller_Contacts extends Controller
{

 function __construct()
 {
  $this->model = new Model_Contacts(); // вбиваем название класса Model
  $this->view = new View();
 }
 
 function action_index()
 {
  $cont = $this->model->get_data();  
  $this->view->generate('contacts_view.php', 'template_view.php'); // с %name_view.php
//var_dump ($cont);
}
}
?>