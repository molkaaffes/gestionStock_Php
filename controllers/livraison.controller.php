<?php
 //session_start();
include "include/connexion.php";
include "Models/livraison.classe.php";

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
$livraison=new livraison($id_remise,$taux_remise);

switch($action){
	case "liste":$res=$livraison->getAll($cnx);
	include "Views/livraison/livraison_liste.php";
	break;
	
	case "add":$livraison->add($cnx);
	break;

	case "edit":$livraison->edit($cnx);
	break;
	
	case "supp":$livraison->supp($cnx);
	break;
	
}
?>