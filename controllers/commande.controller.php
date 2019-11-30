<?php
 //session_start();
include "../include/connexion.php";
include "../models/commande.classe.php";

//initialisation des parametres
 	 $id_commande="";
	 $date_commande="";
	 $adresse_livraison="";

 //$action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_commande']))
$id_commande=$_POST['id_commande'];

if(isset($_POST['date_commande']))
$date_commande=$_POST['date_commande'];

if(isset($_POST['adresse_livraison']))
$adresse_livraison=$_POST['adresse_livraison'];

//creation de l'objet
$commande=new commande($id_commande,$date_commande,$adresse_livraison);

switch($action){
	case "liste":$res=$commande->getAll($cnx);
	include "../views/commande/commande_liste.php";
	break;
	
	case "add":$Commande->add($cnx);
	break;

	case "edit":$Commande->edit($cnx);
	break;
	
	case "supp":$Commande->supp($cnx);
	break;
	
}
?>