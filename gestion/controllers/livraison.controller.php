<?php //session_start();
//include "connexi/on.php";
include "Models/traite.classe.php";
include "Models/cheque.classe.php";

//initialisation des parametres

$RIB="";
$num_cheque="";
$client_cheque="";
$mnt_cheque="";
$date_cheque="";
$banque_cheque="";
$action="add1";

//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];


if(isset($_POST['rib']))
$RIB=$_POST['rib'];

if(isset($_REQUEST['num_cheque']))
$num_cheque=$_REQUEST['num_cheque'];

if(isset($_REQUEST['client_cheque']))
$client_cheque=$_REQUEST['client_cheque'];


if(isset($_POST['mnt_cheque']))
$mnt_cheque=$_POST['mnt_cheque'];



if(isset($_POST['date_cheque']))
$date_cheque=$_POST['date_cheque'];



if(isset($_REQUEST['banque_cheque']))
$banque_cheque=$_REQUEST['banque_cheque'];



//creation de l'objet
$insc=new cheque($RIB,$num_cheque,$banque_cheque,$client_cheque,$mnt_cheque,$date_cheque);

switch($action){
	case "add1":$res=$insc->getAll($cnx);
	include "Views/forms_cheque.php";
	break;
	
	case "add":$insc->add($cnx);
	break;
	
	case "supp":$insc->supp($cnx);
	break;
	
	
}
?>