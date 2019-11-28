<?php
class Commande
{
	private $id_commande;
	private $date_commande;
	private $adresse_livraison;
	


public function __construct($id_commande,$date_commande,$adresse_livraison)
	{
		$this->id_commande=$id_commande;
		$this->date_commande=$date_commande; 
		$this->adresse_livraison=$adresse_livraison; 

		
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into commande (date_commande,adresse_livraison) values('".$this->date_commande."','".$this->adresse_livraison."')");	
		
		//header("location:controller.php?action=liste");
		
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
		$query = 'SELECT * FROM commande';
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