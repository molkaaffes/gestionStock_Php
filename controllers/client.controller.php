<?php
 //session_start();
include "include/connexion.php";
include "Models/client.class.php";

//initialisation des parametres
	 $id="";
	 $num_tel="";
	 $adr_client="";
	 $type_id="";
	 $id_personne="";
	 $mat_client="";
	 $nom_client="";
	 $prenom_client="";
	 $id_societe="";
	 $mat_fiscale="";
	 $nom_societe="";


//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id']))
$id_client=$_POST['id'];

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

if(isset($_POST['nom_client']))
$nom_client=$_POST['nom_client'];

if(isset($_POST['prenom_client']))
$prenom_client=$_POST['prenom_client'];

if(isset($_POST['id_societe']))
$id_societe=$_POST['id_societe'];

if(isset($_POST['mat_fiscale']))
$mat_fiscale=$_POST['mat_fiscale'];

if(isset($_POST['nom_societe']))
$nom_societe=$_POST['nom_societe'];

//creation de l'objet
$client=new client($id,$num_tel,$adr_client,$type_id,$mat_fiscale,$id_personne,$mat_client,$nom_client,$prenom_client,$id_societe,$nom_societe);

switch($action){
	case "listeClient":$res=$client->getAll($cnx);
	include "Views/client/client_liste.php";
	break;

	// case "listePhysique":$res=$client->getAll($cnx);
	// include "Views/client/clientPhysique_liste.php";
	// break;

	// case "listeSociete":$res=$client->getAll($cnx);
	// include "Views/client/clientSociete_liste.php";
	// break;

	case "afficheForm":
	include "Views/client/client_ajout.php";
	break;
	
	case "ajoutPhysique":$client->add($cnx);
	include "Views/client/clientPhysique_ajout.php";
	break;

	case "ajoutSociete":$client->add($cnx);
	include "Views/client/clientSociete_ajout.php";
	break;

	case "add":$client->add($cnx);
	break;

	case "edit":$client->edit($cnx);
	
	break;
	
	case "supp":$client->supp($cnx);
	//include "Views/client/client_liste.php";
	break;
	
}
?>