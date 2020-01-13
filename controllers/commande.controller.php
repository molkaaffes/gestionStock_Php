<?php
 //session_start();
include "include/connexion.php";
include "models/commande.class.php";
include "models/article.class.php";
include "models/detailsCommande.class.php";

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

if(isset($_REQUEST['id_commande']))
$id_commande=$_REQUEST['id_commande'];

if(isset($_REQUEST['date_commande']))
$date_commande=$_REQUEST['date_commande'];

if(isset($_REQUEST['adresse_livraison']))
$adresse_livraison=$_REQUEST['adresse_livraison'];

if(isset($_REQUEST['id_client']))
$id_client=$_REQUEST['id_client'];

if(isset($_REQUEST['id_commande']))
$num_cmd=$_REQUEST['id_commande'];

if(isset($_REQUEST['date_commande']))
$date_commande=$_REQUEST['date_commande'];

if(isset($_REQUEST['prix_unitaire']))
$prix_unitaire=$_REQUEST['prix_unitaire'];

if(isset($_REQUEST['taux_remise_accorde']))
$taux_remise_accorde=$_REQUEST['taux_remise_accorde'];

if(isset($_REQUEST['TVA']))
$TVA=$_REQUEST['TVA'];

if(isset($_REQUEST['TVA']))
$TVA=$_REQUEST['TVA'];
//details cmd initial
$id_detailsCommande='';
$qte_commande='';
$prix_unitaire='';
$taux_remise_accorde='';
$TVA='';

$article_r='';
if(isset($_REQUEST['article']))
$article_r=$_REQUEST['article'];

$quantite_cmd='';
if(isset($_REQUEST['quantite_cmd']))
$quantite_cmd=$_REQUEST['quantite_cmd'];


//creation de l'objet
$commande=new commande($id_commande,$date_commande,$adresse_livraison,$id_client,$num_cmd,$prix_unitaire,$taux_remise_accorde,$TVA);
$article=new article($id_article,$lib_article,$prix_HT,$TVA,$qte_article,$photo_article,$description_article,$num_article);
$details_Commande=new detailsCommande($id_detailsCommande,$article_r,$quantite_cmd,$prix_unitaire,$taux_remise_accorde,$TVA);
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

	case "ValideDetailsCmd":
		$details_Commande=$details_Commande->add($cnx);
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