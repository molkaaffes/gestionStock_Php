<?php
class detailsCommande
{
	private $id_detailsCommande;
	private $qte_commande;
	private $prix_unitaire;
	private $taux_remise_accorde;
	private $TVA;
	private $id_article;
	



public function __construct($id_detailsCommande,$id_article,$qte_commande,$prix_unitaire,$taux_remise_accorde,$TVA)
	{
		$this->id_detailsCommande=$id_detailsCommande;
		$this->qte_commande=$qte_commande; 
		$this->prix_unitaire=$prix_unitaire;
		$this->taux_remise_accorde=$taux_remise_accorde;
		$this->TVA=$TVA;
		$this->id_article=$id_article;
		
	}
	
	public function add($cnx)
	{
		$query = 'SELECT * FROM article where id='.$this->id_article ;
		$article=$cnx->query($query)->fetch(PDO::FETCH_OBJ);

		$query = 'SELECT * FROM remise where id='.$article->id_remise ;
		$remise=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		// var_dump($_SESSION['commande']);

		$cnx -> exec("insert into commande 
		 values('','".$_SESSION['commande'][0]['date_commande']."','".$_SESSION['commande'][0]['adresse_livraison']."',
		 '".$_SESSION['commande'][0]['id_client']."','".$_SESSION['commande'][0]['num_cmd']."')");	

		 $cnx -> exec("insert into details_commande 
		 values('','".$this->qte_commande."','".$article->prix_HT."','".$_SESSION['commande'][0]['taux_remise_accorde']."','20%',
		 '".$_SESSION['commande'][0]['num_cmd']."','".$this->id_article."')");	
		
		//header("location:controller.php?action=liste");
		
	}
	public function supp($cnx)
	{
		/*
		$sql = "DELETE FROM details_commande WHERE email= 'dodo@gmail.com'";
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:controller.php?action=liste");*/
	}
	public function liste($cnx)
	{
		$query = 'SELECT * FROM details_commande';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $tab;
		
	}
public function detail($cnx)
	{
		$query = 'SELECT * FROM details_commande where id='.$this->id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  details_commande set `qte_commande` = '".$this->qte_commande."' , `prix_unitaire` = '".$this->prix_unitaire."' , `taux_remise_accorde` = '".$this->taux_remise_accorde."' , `TVA` = '".$this->TVA."' where id = ".$this->id_detailsCommande;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>