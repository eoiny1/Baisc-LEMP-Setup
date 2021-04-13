<?php
require_once '../vendor/autoload.php';

use App\Controller\Home;

$homeController = new Home();

echo $homeController->SayHello();

?>