<?php
 //session_start();
include "include/connexion.php";
include "models/commande.class.php";
include "models/article.class.php";

//initialisation des parametres
 	 $id_commande="";
	 $date_commande="";
	 $adresse_livraison="";
	 $id_client="";
	 $num_cmd="";
	 $prix_unitaire="";
	 $taux_remise_accorde="";
	 $TVA="";
//
$id_article ="";
$lib_article="";
$prix_HT="";
$TVA="";
$qte_article="";
$photo_article="";
$description_article="";
$num_article="";
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

if(isset($_POST['id_commande']))
$num_cmd=$_POST['id_commande'];

if(isset($_POST['date_commande']))
$date_commande=$_POST['date_commande'];

if(isset($_POST['prix_unitaire']))
$prix_unitaire=$_POST['prix_unitaire'];

if(isset($_POST['taux_remise_accorde']))
$taux_remise_accorde=$_POST['taux_remise_accorde'];

if(isset($_POST['TVA']))
$TVA=$_POST['TVA'];

//creation de l'objet
$commande=new commande($id_commande,$date_commande,$adresse_livraison,$id_client,$num_cmd,$prix_unitaire,$taux_remise_accorde,$TVA);
$article=new article($id_article,$lib_article,$prix_HT,$TVA,$qte_article,$photo_article,$description_article,$num_article);
switch($action){
	case "liste"://$res=$commande->liste($cnx);
		include "views/commande/commande_liste.php";
	break;
	
	case "add":$commande->add($cnx);
	break;

	case "addDetails":
			$articles=$article->liste($cnx);
	include "Views/commande/details_cmd_add.php";
	break;

	case "afficheForm":
	include "views/commande/commande_ajout.php";
	break;

	case "edit":$commande->edit($cnx);
	break;
	
	case "supp":$commande->supp($cnx);
	break;
	
}
?>