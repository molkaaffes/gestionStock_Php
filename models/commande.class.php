<?php
class Commande
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
		$_SESSION['date_commande']=$this->date_commande;
		$_SESSION['adresse_livraison']=$this->adresse_livraison;
		$_SESSION['id_client']=$this->id_client;
		$_SESSION['taux_remise_accorde']=$this->taux_remise_accorde;
		$_SESSION['num_cmd']=$this->num_cmd;
		//include "Views/commande/details_cmd_add.php";
	//	header("location:commande.controller.php?action=addDetails");
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
		$query = 'SELECT c.id_commande,c.date_commande,cl.id,cl.nom_client,c.adresse_livraison,a.num_article,dt.qte_commande
		 FROM commande c ,client cl , article a , details_commande dt
	 	 where c.id_commande=dt.id_commande and c.id_client=cl.id;  ';
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