<?php

namespace root;

// include_once('./Classes/Toyota.php');
// include_once('./Classes/Honda.php');
// include_once('./Classes/Oddi.php');
spl_autoload_register(function ($class_name) {
    echo $class_name ;
});

$car1=new App\Classes\Toyota();

// $car2 =new \car\Honda();

// $car3= new \car\Oddi();



?>