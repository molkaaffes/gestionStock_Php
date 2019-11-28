<?php
class Categorie
{
	private $id_categorie;
	private $lib_categorie;
	
public function __construct($id_categorie,$lib_categorie)
	{
		$this->id_categorie=$id_categorie;
		$this->lib_categorie=$lib_categorie; 
		
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into categorie (lib_categorie) values('".$this->lib_categorie."')");	
		
		//header("location:controller.php?action=liste");
		
	}
	public function supp($cnx)
	{
		/*
		$sql = "DELETE FROM categorie WHERE email= 'dodo@gmail.com'";
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:controller.php?action=liste");*/
	}
	public function liste($cnx)
	{
		$query = 'SELECT * FROM categorie';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $tab;
		
	}
public function detail($cnx)
	{
		$query = 'SELECT * FROM categorie where id='.$this->id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  categorie set `lib_categorie` = '".$this->lib_categorie."' where id = ".$this->id_categorie;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>