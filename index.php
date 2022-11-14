<?php

namespace root;

use App\Controller\Backend\AdminController;
use App\Controller\Fontend\BannnerController;

// include_once('./Classes/Toyota.php');
// include_once('./Classes/Honda.php');
// include_once('./Classes/Oddi.php');


spl_autoload_register(function ($class_name) {
    echo  'from controller:'.$class_name;
    include  $class_name.".php";
});

$Admin= new AdminController();
$Bannar= new BannnerController();





?>