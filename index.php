<?php



/*Require de Smarty class die nodig is om smarty te laden*/
require_once ('smarty/libs/Smarty.class.php');
Require_once ("database.php");
/*Maakt een nieuw smarty object aan*/
$smarty = new Smarty();

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
  $action = NULL;
}

switch ($action) {
  case 'create':
    // formulier om vat toe te voegen
    break;
case 'store':
break;
case 'edit':
break;
case 'update':
break;
case 'destroy':

  default:
  $getblogs = $conn->prepare("SELECT * FROM blog");
  $getblogs->execute();
  $blogs = $getblogs->fetchall(PDO::FETCH_ASSOC);

  $smarty->assign('blogs',$blogs);

  $smarty->display("template/index.tpl");

    break;
}
