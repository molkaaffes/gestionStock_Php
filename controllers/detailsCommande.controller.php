<?php
 //session_start();
include "include/connexion.php";
include "Models/detailsCommande.class.php";

//initialisation des parametres
 $id_detailsCommande;
 $qte_commande;
 $prix_unitaire;
 $taux_remise_accorde;
 $TVA;

 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_detailsCommande']))
$id_detailsCommande=$_POST['id_detailsCommande'];

if(isset($_POST['qte_commande']))
$qte_commande=$_POST['qte_commande'];

if(isset($_POST['prix_unitaire']))
$prix_unitaire=$_POST['prix_unitaire'];

if(isset($_POST['taux_remise_accorde']))
$taux_remise_accorde=$_POST['taux_remise_accorde'];

if(isset($_POST['TVA']))
$TVA=$_POST['TVA'];

if(isset($_POST['article_id']))
$TVA=$_POST['article_id'];

//creation de l'objet
$details_Commande=new detailsCommande($id_detailsCommande,$article_id,$qte_commande,$prix_unitaire,$taux_remise_accorde,$TVA);

switch($action){
	case "liste"://$res=$details_Commande->getAll($cnx);
	include "Views/details_Commande/details_Commande_liste.php";
	break;
	
	case "add":$details_Commande->add($cnx);
	break;

	case "edit":$details_Commande->edit($cnx);
	break;
	
	case "supp":$details_Commande->supp($cnx);
	break;
	
}
?>