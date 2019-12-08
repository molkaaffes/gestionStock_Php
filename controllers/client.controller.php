<?php
 //session_start();
include "include/connexion.php";
include "Models/client.class.php";

//initialisation des parametres
	 $id="";
	 $num_tel="";
	 $adr_client="";
	 $type_id="";
	 $mat_client="";
	 $nom_client="";
	 $prenom_client="";
	 $mat_fiscale="";
	 


//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];


if(isset($_POST['num_tel']))
$num_tel=$_POST['num_tel'];

if(isset($_POST['adr_client']))
$adr_client=$_POST['adr_client'];

if(isset($_POST['type_id']))
$type_id=$_POST['type_id'];



if(isset($_POST['mat_client']))
$mat_client=$_POST['mat_client'];

if(isset($_POST['nom_client']))
$nom_client=$_POST['nom_client'];

if(isset($_POST['prenom_client']))
$prenom_client=$_POST['prenom_client'];



if(isset($_POST['mat_fiscale']))
$mat_fiscale=$_POST['mat_fiscale'];


//creation de l'objet
$client=new client($id,$num_tel,$adr_client,$type_id,$mat_fiscale,$mat_client,$nom_client,$prenom_client);

switch($action){
	case "listeClient":$res=$client->getAll($cnx);
	include "Views/client/client_liste.php";
	break;

	case "listePhysique":$res=$client->getAll($cnx);
	include "Views/client/clientPhysique_liste.php";
	break;

	case "listeSociete":$res=$client->getAll($cnx);
	include "Views/client/clientSociete_liste.php";
	break;

	case "afficheForm":
	include "Views/client/client_ajout.php";
	break;
	
	case "ajoutPhysique":$client->addPersonne($cnx);
	include "Views/client/clientPhysique_ajout.php";
	break;

	case "ajoutSociete":$client->addSociete($cnx);
	include "Views/client/clientSociete_ajout.php";
	break;

	case "showEdit":$res=$client->findOne($cnx);
	include "views/client/client_edit.php";
	break;

	case "edit":$client->edit($cnx);
	//include "views/client/client_liste.php";
	break;
	
	case "suppSociete":$client->supp($cnx);
	break;

	case "suppPhysique":$client->supp($cnx);
	break;
	
	case "supp":$client->supp($cnx);
	//include "Views/client/client_liste.php";
	break;
	
}
?>