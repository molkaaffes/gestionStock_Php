<?php
 //session_start();
include "include/connexion.php";
include "Models/facture.classe.php";

//initialisation des parametres
 	 $id_facture;
	 $num_facture;
	 $date_facture;
	 $adr_facture;
	 $solde_facture;
	 $etat_facture;

 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_facture']))
$id_facture=$_POST['id_facture'];

if(isset($_POST['num_facture']))
$num_facture=$_POST['num_facture'];

if(isset($_POST['date_facture']))
$date_facture=$_POST['date_facture'];

if(isset($_POST['adr_facture']))
$adr_facture=$_POST['adr_facture'];

if(isset($_POST['solde_facture']))
$solde_facture=$_POST['solde_facture'];

if(isset($_POST['solde_facture']))
$solde_facture=$_POST['solde_facture'];

//creation de l'objet
$facture=new facture($id_facture,$num_facture,$date_facture,$adr_facture,$solde_facture,$etat_facture);

switch($action){
	case "liste":$res=$facture->getAll($cnx);
	include "Views/facture/facture_liste.php";
	break;
	
	case "add":$facture->add($cnx);
	break;

	case "edit":$facture->edit($cnx);
	break;
	
	case "supp":$facture->supp($cnx);
	break;
	
}
?>