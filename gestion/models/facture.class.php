<?php
class Facture
{
	private $id_facture;
	private $num_facture;
	private $date_facture;
	private $adr_facture;
	private $solde_facture;
	private $etat_facture;

	


public function __construct($id_facture,$num_facture,$date_facture,$adr_facture,$solde_facture,$etat_facture)
	{
		$this->id_facture=$id_facture;
		$this->num_facture=$num_facture; 
		$this->date_facture=$date_facture;
		$this->adr_facture=$adr_facture;
		$this->solde_facture=$solde_facture;
		$this->etat_facture=$etat_facture; 
		
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into facture (num_facture,date_facture, adr_facture,solde_facture,etat_facture ) values('".$this->num_facture."','".$this->date_facture."','".$this->adr_facture."','".$this->solde_facture."','".$this->etat_facture."')");	
		
		//header("location:controller.php?action=liste");
		
	}
	public function supp($cnx)
	{
		/*
		$sql = "DELETE FROM facture WHERE email= 'dodo@gmail.com'";
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:controller.php?action=liste");*/
	}
	public function liste($cnx)
	{
		$query = 'SELECT * FROM facture';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $tab;
		
	}
public function detail($cnx)
	{
		$query = 'SELECT * FROM facture where id='.$this->id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  facture set `num_facture` = '".$this->num_facture."' , `date_facture` = '".$this->date_facture."' , `adr_facture` = '".$this->adr_facture."' , `solde_facture` = '".$this->solde_facture."' , `etat_facture` = '".$this->etat_facture."' where id = ".$this->id_facture;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>