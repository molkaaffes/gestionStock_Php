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
	


public function __construct($id_commande,$date_commande,$adresse_livraison,$id_client,$qte_commande,$prix_unitaire,$taux_remise_accorde,$TVA)
	{
		$this->id_commande=$id_commande;
		$this->date_commande=$date_commande; 
		$this->adresse_livraison=$adresse_livraison; 
		$this->id_client=$id_client; 
		$this->qte_commande=$qte_commande;
		$this->prix_unitaire=$prix_unitaire; 
		$this->taux_remise_accorde=$taux_remise_accorde; 
		$this->TVA=$TVA; 

		
	}
	
	public function add($cnx)
	{
	$cnx -> exec("insert into commande  (date_commande,adresse_livraison,id_client) values('".$this->date_commande."','".$this->adresse_livraison."','".$this->id_client."')");	
		$cnx-> exec("insert into details_commande  (qte_commande,prix_unitaire,taux_remise_accorde,TVA,id_commande) values('".$this->qte_commande."','".$this->prix_unitaire."','".$this->taux_remise_accorde."','".$this->TVA."','".$this->id_commande."')" );
	}
	public function supp($cnx)
	{
		/*
		$sql = "DELETE FROM commande WHERE email= 'dodo@gmail.com'";
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:controller.php?action=liste");*/
	}
	 public function liste($cnx)
	{
		$query = 'SELECT cl.nom,cl.num,a.num,a.lib_article,dt.qt_commande
		 FROM commande c ,client cl , article a , details_commande dt
	 	 where  ';
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