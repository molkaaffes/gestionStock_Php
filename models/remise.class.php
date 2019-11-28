<?php
class Remise
{
	private $id_remise;
	private $taux_remise;

public function __construct($id_remise,$taux_remise)
	{
		$this->id_remise=$id_remise;
		$this->taux_remise=$taux_remise; 
		
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into remise (taux_remise) values('".$this->taux_remise."')");	
		
		//header("location:controller.php?action=liste");
		
	}
	public function supp($cnx)
	{
		/*
		$sql = "DELETE FROM remise WHERE email= 'dodo@gmail.com'";
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:controller.php?action=liste");*/
	}
	public function liste($cnx)
	{
		$query = 'SELECT * FROM remise';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $tab;
		
	}
public function detail($cnx)
	{
		$query = 'SELECT * FROM remise where id='.$this->id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  remise set `taux_remise` = '".$this->taux_remise."' where id = ".$this->id_remise;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>