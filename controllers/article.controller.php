<?php
 //session_start();
include "include/connexion.php";
include "models/article.class.php";
include_once "models/fonction.class.php";
//require_once('models/fonction.class.php');

//initialisation des parametres
$tab_ext=array('jpg','png','gif');
$fn=new fonction();
   	 $id_article ="";
	 $lib_article="";
	 $prix_HT="";
	 $TVA="";
	 $qte_article="";
	 $photo_article="";
	 $description_article="";
	 $num_article="";

	// $action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_POST['id_artcile']))
$id_article =$_POST['id_artcile'];

if(isset($_REQUEST['id']))  
	$id =$_REQUEST['id']; 
	
if(isset($_REQUEST['lib_article']))
$lib_article=$_REQUEST['lib_article'];

if(isset($_REQUEST['prix_HT']))
$prix_HT=$_REQUEST['prix_HT'];

if(isset($_POST['TVA']))
$TVA=$_POST['TVA'];

if(isset($_POST['qte_article']))
$qte_article=$_POST['qte_article'];

if(isset($_REQUEST['photo_old']))
$photo_article=$_REQUEST['photo_old'];

if(isset($_REQUEST['description_article']))
$description_article=$_REQUEST['description_article'];

if(isset($_REQUEST['num_article']))
$num_article=$_REQUEST['num_article'];

//image
if(isset($_FILES['photo_article']))
{
	if(is_uploaded_file($_FILES['photo_article']['tmp_name']))
	{
	if(!empty($photo_article))
	unlink("photos/Articles".$photo_article);

	$photo_article=$_FILES['photo_article']['name'];
	$tab=explode('.',$photo_article);
	$ext=strtolower($tab[sizeof($tab)-1]);
	if(!in_array($ext,$tab_ext)){
		echo "erreur d extention!";
		exit();
	}
	
	$nom_photo=$fn->generer_chaine(8);
	
	$photo_article=$nom_photo.".".$ext;
	
	copy($_FILES['photo_article']['tmp_name'],'photos/Articles/'.$photo_article);
	}
}


//creation de l'objet
$article=new article($id_article,$lib_article,$prix_HT,$TVA,$qte_article,$photo_article,$description_article,$num_article);

switch($action){
	case "liste":$res=$article->liste($cnx);
	include "views/article/article_liste.php";
	break;
	
	case "add":$article->add($cnx);
	break;

	case "afficheForm":
	include "views/article/article_ajout.php";
	break;

	case "showEdit":$res=$article->findOne($id,$cnx);
	include "views/article/article_edit.php";
	break;

	case "edit":$article->edit($cnx,$id);
	break;
	
	case "supp":$article->supp($id,$cnx);
	break;
	
}
?>