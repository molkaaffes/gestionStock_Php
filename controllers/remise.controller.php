<?php
 //session_start();
include "include/connexion.php";
include "Models/remise.classe.php";

//initialisation des parametres
  $id_remise;
  $taux_remise;

 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_remise']))
$id_remise=$_POST['id_remise'];

if(isset($_POST['taux_remise']))
$taux_remise=$_POST['taux_remise'];

//creation de l'objet
$remise=new Remise($id_remise,$taux_remise);

switch($action){
	case "liste":$res=$remise->getAll($cnx);
	include "Views/remise/remise_liste.php";
	break;
	
	case "add":$remise->add($cnx);
	break;

	case "edit":$remise->edit($cnx);
	break;
	
	case "supp":$remise->supp($cnx);
	break;
	
}
?>