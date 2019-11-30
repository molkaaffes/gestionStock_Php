<?php include_once '../include/connexion.php'; 
include_once "../models/fonctions.class.php";
//initialisation des variables $controleur et $action 

$controller='article'; 
$action='add';
//var_dump($_REQUEST['controller']);
//Recupération 

if(isset($_REQUEST['controller'])) 
    $controller =$_REQUEST['controller']; 
if(isset($_REQUEST['action']))  
    $action =$_REQUEST['action']; ?> 
<html>
<head>
</head>
<body>
<?php include $controller.'.controller.php'; ?>

</body>
</html>