<?php include_once 'includes/connexion.php'; 

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
<?php include 'Controllers/'.$controller.'.controller.php'; ?>

</body>
</html>