<?php include_once 'include/connexion.php'; 
//include_once "models/fonctions.class.php";
//initialisation des variables $controleur et $action 

if (isset($_SESSION))
   { 
    // Unset all of the session variables.
    $_SESSION['commande']=array();
   }
   session_start();

//print_r ($_SESSION);

$controller='article'; 
$action='add';
//$_SESSION
//$_SESSION['auth']=false;

// var_dump($_REQUEST['controller']);
// var_dump($_REQUEST['action']);

//Recupération 
if($_SESSION['auth']==true )
{
    if(isset($_REQUEST['controller'])) 
    {
        $controller =$_REQUEST['controller']; 
        //echo("test:".$controller);
    }
    if(isset($_REQUEST['action']))  
        $action =$_REQUEST['action'];

    if(isset($_REQUEST['id']))  
        $id =$_REQUEST['id']; 
}else{
    $controller="admin";
    $action="logout";
}
 ?> 

<?php 
    //  print_r($_REQUEST['controller']);
    //  print_r($_REQUEST['action']);
   //  print_r($_SESSION);
?>

<html>
    <head>
    </head>
        <body>
            <?php include 'controllers/'.$controller.'.controller.php'; ?>
        </body>
</html>