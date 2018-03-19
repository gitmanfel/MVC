<?php
// require_once('controllers/Router.php');

// $router=new Router();
// $router->routeReq();

$page;
if(isset($_GET['page']) && !empty($_GET['page']))
{
$page=htmlentities($_GET['page']);

}

else
{
$page='home';

}
require_once('controllers/Controller.php')

 ?>

 <!-- <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" /> -->
