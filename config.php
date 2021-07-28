<?php 

<<<<<<< HEAD
=======

>>>>>>> 32786bca51879f8b58297827eeeb8d5b61788e53
spl_autoload_register(function($class_name){
  
  $filename = "class". DIRECTORY_SEPARATOR . $class_name.".php";
  
  if(file_exists(($filename))) {
    require_once($filename);
  }

}); 

?>