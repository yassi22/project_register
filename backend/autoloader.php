<?php 

function autoload($class){  

require 'class/'. $class . '.php'; 

}

spl_autoload_register('autoload');


$postIns = new Post();   


 
