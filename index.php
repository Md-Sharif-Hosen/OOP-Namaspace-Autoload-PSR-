<?php

namespace root;
include "./autoload.php";

use App\Controller\Backend\AdminController;
use App\Controller\Fontend\BannnerController;
use const App\Controller\Fontend\TESTCONST;
use function App\Controller\Fontend\show_name;

// include_once('./Classes/Toyota.php');
// include_once('./Classes/Honda.php');
// include_once('./Classes/Oddi.php');



$Admin= new AdminController();
$Bannar= new BannnerController();


echo TESTCONST;
show_name();


?>