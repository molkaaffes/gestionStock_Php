<?php include_once 'include/connexion.php'; 
//include_once "models/fonctions.class.php";
//initialisation des variables $controleur et $action 

$controller='article'; 
$action='add';

// var_dump($_REQUEST['controller']);
// var_dump($_REQUEST['action']);

//Recupération 

if(isset($_REQUEST['controller'])) 
{
    $controller =$_REQUEST['controller']; 
    //echo("test:".$controller);
}
if(isset($_REQUEST['action']))  
    $action =$_REQUEST['action'];

if(isset($_REQUEST['id']))  
    $id =$_REQUEST['id']; 
    
 ?> 
 
<html>
<head>
</head>
<body>
<?php include 'controllers/'.$controller.'.controller.php'; ?>

</body>
</html>