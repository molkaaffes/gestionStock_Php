<?php
class DetailsCommande
{
	private $id_detailsCommande;
	private $qte_commande;
	private $prix_unitaire;
	private $taux_remise_accorde;
	private $TVA;
	



public function __construct($id_detailsCommande,$qte_commande,$prix_unitaire,$taux_remise_accorde,$TVA)
	{
		$this->id_detailsCommande=$id_detailsCommande;
		$this->qte_commande=$qte_commande; 
		$this->prix_unitaire=$prix_unitaire;
		$this->taux_remise_accorde=$taux_remise_accorde;
		$this->TVA=$TVA;
		
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into details_commande (qte_commande,prix_unitaire, taux_remise_accorde,TVA,nom_details_commande,date_echenace ) values('".$this->qte_commande."','".$this->prix_unitaire."','".$this->taux_remise_accorde."','".$this->TVA."')");	
		
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