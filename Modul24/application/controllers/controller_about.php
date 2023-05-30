<?php
class Controller_About extends Controller


{

 function __construct()
 {
  $this->model = new Model_About(); // вбиваем название класса Model
  $this->view = new View();
 }
 
 function action_index()
 {
  $cont = $this->model->get_data();  
  $this->view->generate('about_view.php', 'template_view.php', $cont); // с %name_view.php
//var_dump ($cont);
}
}
?>