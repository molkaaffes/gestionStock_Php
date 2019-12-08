<?php
 //session_start();
include "include/connexion.php";
include "models/commande.class.php";

//initialisation des parametres
 	 $id_commande="";
	 $date_commande="";
	 $adresse_livraison="";
	 $id_client="";
	 $qte_commande="";
	 $prix_unitaire="";
	 $taux_remise_accorde="";
	 $TVA="";

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

if(isset($_POST['id_client']))
$id_client=$_POST['id_client'];

if(isset($_POST['qte_commande']))
$qte_commande=$_POST['qte_commande'];

if(isset($_POST['date_commande']))
$date_commande=$_POST['date_commande'];

if(isset($_POST['prix_unitaire']))
$prix_unitaire=$_POST['prix_unitaire'];

if(isset($_POST['taux_remise_accorde']))
$taux_remise_accorde=$_POST['taux_remise_accorde'];

if(isset($_POST['TVA']))
$TVA=$_POST['TVA'];

//creation de l'objet
$commande=new commande($id_commande,$date_commande,$adresse_livraison,$id_client,$qte_commande,$prix_unitaire,$taux_remise_accorde,$TVA);

switch($action){
	case "liste":$res=$commande->liste($cnx);
	include "views/commande/commande_liste.php";
	break;
	
	case "add":$commande->add($cnx);
	break;

	case "afficheForm":$commande->add($cnx);
	include "views/commande/commande_ajout.php";
	break;

	case "edit":$commande->edit($cnx);
	break;
	
	case "supp":$commande->supp($cnx);
	break;
	
}
?>