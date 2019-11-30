<?php
 //session_start();
include "../include/connexion.php";
include "../models/article.class.php";

//initialisation des parametres

   	 $id_article ="";
	 $lib_article="";
	 $prix_HT="";
	 $TVA="";
	 $qte_article="";
	 $photo_article="";
	 $description_article="";
	 $num_artcile="";

	// $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_artcile']))
$id_article =$_POST['id_artcile'];

if(isset($_REQUEST['lib_article']))
$lib_article=$_REQUEST['lib_article'];

if(isset($_REQUEST['prix_HT']))
$prix_HT=$_REQUEST['prix_HT'];

if(isset($_POST['TVA']))
$TVA=$_POST['TVA'];

if(isset($_POST['qte_article']))
$qte_article=$_POST['qte_article'];

if(isset($_POST['photo_article']))
$photo_article=$_POST['photo_article'];

if(isset($_REQUEST['description_article']))
$description_article=$_REQUEST['description_article'];

if(isset($_REQUEST['num_artcile']))
$num_artcile=$_REQUEST['num_artcile'];

//creation de l'objet
$article=new article($id_article,$lib_article,$prix_HT,$TVA,$qte_article,$photo_article,$description_article,$num_artcile);

switch($action){
	case "liste":$res=$article->liste($cnx);
	include "..\..\views\article\article_liste.php";
	break;
	
	case "add":$article->add($cnx);
	break;

	case "edit":$article->edit($cnx);
	break;
	
	case "supp":$article->supp($cnx);
	break;
	
}
?>