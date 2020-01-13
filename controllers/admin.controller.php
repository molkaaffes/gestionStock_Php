<?php
include "models/admin.class.php";
//initialisation des attributs de l’objet voiture
$login='';
$pass='';
$action='logout';
//récuperation des valeurs des attributs de l’objet voiture
if(isset($_REQUEST['login'])) 
	$login=$_REQUEST['login'];
if(isset($_REQUEST['pass'])) 
	$pass=$_REQUEST['pass'];

if(isset($_REQUEST['action'])) 
	$action=$_REQUEST['action'];

//Instanciation de l’objet voiture
$inst=new admin($login,$pass);

switch($action){

	//formulaire d'authentification
case "login1": include "views/login.php";
break;
//exec authent
case "login": $inst->login($cnx);
break;

case"connect": include "views/dashboard/dashboard.php";
break;
//deconnexion
case "logout": $inst->logout();
break;

case"erreur": include "views/login.php";
break;

}
?>