<?php
 //session_start();
include "include/connexion.php";
include "Models/facture.classe.php";

//initialisation des parametres
 	 $id_client;
	 $num_tel;
	 $adr_client;
	 $type_id;
	 $id_personne;
	 $mat_client;
	 $nom_client;
	 $prenom_client;
	 $id_societe;
	 $mat_fiscale;

 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_client']))
$id_client=$_POST['id_client'];

if(isset($_POST['num_tel']))
$num_tel=$_POST['num_tel'];

if(isset($_POST['adr_client']))
$adr_client=$_POST['adr_client'];

if(isset($_POST['type_id']))
$type_id=$_POST['type_id'];

if(isset($_POST['id_personne']))
$id_personne=$_POST['id_personne'];

if(isset($_POST['mat_client']))
$mat_client=$_POST['mat_client'];

if(isset($_POST['prenom_client']))
$prenom_client=$_POST['prenom_client'];

if(isset($_POST['id_societe']))
$id_societe=$_POST['id_societe'];

if(isset($_POST['mat_fiscale']))
$mat_fiscale=$_POST['mat_fiscale'];

//creation de l'objet
$client=new client($id_client,$num_tel,$adr_client,$type_id,$id_personne,$mat_client,$nom_client,$prenom_client,$id_societe,$mat_fiscale);

switch($action){
	case "liste":$res=$client->getAll($cnx);
	include "Views/client/client_liste.php";
	break;
	
	case "add":$client->add($cnx);
	break;

	case "edit":$client->edit($cnx);
	break;
	
	case "supp":$client->supp($cnx);
	break;
	
}
?>