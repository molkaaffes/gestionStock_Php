<?php
 //session_start();
include "include/connexion.php";
include "Models/categorie.classe.php";

//initialisation des parametres
 $id_categorie="";
 $lib_categorie="";

 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_categorie']))
$id_categorie=$_POST['id_categorie'];

if(isset($_POST['lib_categorie']))
$lib_categorie=$_POST['lib_categorie'];

//creation de l'objet
$categorie=new categorie($id_categorie,$lib_categorie);

switch($action){
	case "liste":$res=$categorie->getAll($cnx);
	include "Views/categorie/categorie_liste.php";
	break;
	
	case "add":$categorie->add($cnx);
	break;

	case "edit":$categorie->edit($cnx);
	break;
	
	case "supp":$categorie->supp($cnx);
	break;
	
}
?>