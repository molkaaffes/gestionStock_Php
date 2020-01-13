<?php
 //session_start();
include "include/connexion.php";
include "models/reglement.class.php";

//initialisation des parametres
	  $id_reglement="";
	  $montant="";
	  $type_reglement="";
	  $num_cheq="";
	  $nom_banque="";
	  $nom_client="";
	  $date_echeance="";
	  $num_traite="";

 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id_reglement']))
$id_reglement=$_REQUEST['id_reglement'];

if(isset($_REQUEST['montant']))
$montant=$_REQUEST['montant'];

if(isset($_REQUEST['type_reglement']))
$type_reglement=$_REQUEST['type_reglement'];

if(isset($_REQUEST['num_cheq']))
$num_cheq=$_REQUEST['num_cheq'];

if(isset($_REQUEST['nom_banque']))
$nom_banque=$_REQUEST['nom_banque'];

if(isset($_REQUEST['nom_client']))
$nom_client=$_REQUEST['nom_client'];

if(isset($_REQUEST['date_echeance']))
$date_echeance=$_REQUEST['date_echeance'];

if(isset($_REQUEST['num_traite']))
$num_traite=$_REQUEST['num_traite'];

//creation de l'objet
$res=new reglement($id_reglement,$montant,$type_reglement,$num_cheq,$nom_banque,$nom_client,$date_echeance,$num_traite);

switch($action){
	//  case "liste":$res=$res->getAll($cnx);
	// include "Views/reglement/reglement_liste.php";
	// break;

	case "listeCheque":$res=$res->getAllCheque($cnx);
		 include "views/reglement/cheque.php";
	break;
	
	case "add":$res->add($cnx);
	break;

	case "supp":$res->supp($id,$cnx);
	break;
	
	
	// case "add1":$res=$ins->getAll($cnx);
	// include "Views/facture/facture_liste.php";
	// break;
	
	
	
}
?>