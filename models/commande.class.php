<?php
class commande
{
	private $id_commande;
	private $date_commande;
	private $adresse_livraison;
	private $id_client;
	private $qte_commande;
	private $prix_unitaire;
	private $taux_remise_accorde;
	private $TVA;
	private $num_cmd;
	


public function __construct($id_commande,$date_commande,$adresse_livraison,$id_client,$num_cmd,$prix_unitaire,$taux_remise_accorde,$TVA)
	{
		$this->id_commande=$id_commande;
		$this->date_commande=$date_commande; 
		$this->adresse_livraison=$adresse_livraison; 
		$this->id_client=$id_client; 
		$this->num_cmd=$num_cmd;
		$this->prix_unitaire=$prix_unitaire; 
		$this->taux_remise_accorde=$taux_remise_accorde; 
		$this->TVA=$TVA; 	
	}
	
	public function add($cnx)
	{
		//$_SESSION['commande']=array();
		$commande['date_commande']=$this->date_commande;
		$commande['adresse_livraison']=$this->adresse_livraison;
		$commande['id_client']=$this->id_client;
		$commande['taux_remise_accorde']=$this->taux_remise_accorde;
		$commande['num_cmd']=$this->num_cmd;
		array_push($_SESSION['commande'],$commande);
	//	print_r($_SESSION['commande']);
	//	print_r($commande);
	//	print_r($this);
		
		header("location:index.controller.php?controller=commande&action=addDetails");
	}
	public function supp($cnx)
	{
		$_SESSION['date_commande']="";
		$_SESSION['adresse_livraison']="";
		$_SESSION['id_client']="";
		$_SESSION['taux_remise_accorde']="";
		$_SESSION['num_cmd']="";
		header("location:commande.controller.php?action=liste");
//	include "views/commande/commande_liste.php";
	}
	 public function liste($cnx)
	{
		$query = 'SELECT * FROM commande ';
	 	$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
	 	return $tab;
	 }

	public function detail($cnx)
	{
		$query = 'SELECT * FROM commande where id='.$this->id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  commande set `date_commande` = '".$this->date_commande."' , `adresse_livraison` = '".$this->adresse_livraison."' where id = ".$this->id_commande;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>