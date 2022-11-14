<?php
namespace App\Controller\Fontend;
class BannnerController{
 public function __construct()
 {
    echo "<br> <br>BannnerController controller";
 }
}
const TESTCONST="<br>sharif";
function show_name(){
    echo "<br>this is Sharif".TESTCONST;
}