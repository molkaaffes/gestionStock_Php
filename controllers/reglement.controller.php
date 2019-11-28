<?php
 //session_start();
include "include/connexion.php";
include "Models/reglement.classe.php";

//initialisation des parametres
	  $id_reglement;
	  $montant;
	  $type_reglement;
	  $num_cheq;
	  $nom_banque;
	  $nom_reglement;
	  $date_echenace;
	  $num_traite;

 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_reglement']))
$id_reglement=$_POST['id_reglement'];

if(isset($_POST['montant']))
$montant=$_POST['montant'];

if(isset($_POST['type_reglement']))
$type_reglement=$_POST['type_reglement'];

if(isset($_POST['num_cheq']))
$num_cheq=$_POST['num_cheq'];

if(isset($_POST['nom_banque']))
$nom_banque=$_POST['nom_banque'];

if(isset($_POST['nom_reglement']))
$nom_reglement=$_POST['nom_reglement'];

if(isset($_POST['date_echenace']))
$date_echenace=$_POST['date_echenace'];

if(isset($_POST['num_traite']))
$num_traite=$_POST['num_traite'];

//creation de l'objet
$reglement=new Reglement($id_reglement,$montant,$type_reglement,$num_cheq,$nom_banque,$nom_reglement,$date_echenace,$num_traite);

switch($action){
	case "liste":$res=$reglement->getAll($cnx);
	include "Views/reglement/reglement_liste.php";
	break;
	
	case "add":$reglement->add($cnx);
	break;

	case "edit":$reglement->edit($cnx);
	break;
	
	case "supp":$reglement->supp($cnx);
	break;
	
}
?>