<?php
class Model_Galery extends Model
{
  public function get_data()
  { 
    $images=[];
    $images_dir="./images";
    $files=array_diff(scandir($images_dir), array('..', '.'));
    foreach ($files as $file) {
      $images[]='http://localhost/images/' . $file;      
      
    }
    return $images;
  }
  public function get_comments()
  {
     return getComments();
  }
}
?>
