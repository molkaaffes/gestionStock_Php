<?php
 //session_start();
include "include/connexion.php";
include "Models/article.classe.php";

//initialisation des parametres

   	 $id_artcile="";
	 $lib_article="";
	 $prix_HT="";
	 $TVA="";
	 $qte_article="";
	 $photo_article="";
	 $description_article="";
	 $num_article="";

	 $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_artcile']))
$id_artcile=$_POST['id_artcile'];

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

if(isset($_REQUEST['num_article']))
$num_article=$_REQUEST['num_article'];

//creation de l'objet
$article=new article($id_article,$lib_article,$prix_HT,$TVA,$qte_article,$photo_article,$description_article,$num_article);

switch($action){
	case "liste":$res=$article->getAll($cnx);
	include "Views/artile/article_liste.php";
	break;
	
	case "add":$article->add($cnx);
	break;

	case "edit":$article->edit($cnx);
	break;
	
	case "supp":$article->supp($cnx);
	break;
	
}
?>