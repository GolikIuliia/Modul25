<?php
class Controller_Portfolio extends Controller
{

 function __construct()
 {
  $this->model = new Model_Portfolio(); // вбиваем название класса Model
  $this->view = new View();
 }
 
 function action_index()
 {
  $tel = $this->model->get_data();  
  $this->view->generate('portfolio_view.php', 'template_view.php', $tel); // вместо $tel может быть любая переменная, которая вставлена в страничку с %name_view.php
//var_dump ($tel);
}
}
?>