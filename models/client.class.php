<?php
class Client
{
	private $id;
	private $num_tel;
	private $adr_client;
	private $type_id;
	private $mat_client;
	private $nom_client;
	private $prenom_client;
	private $mat_fiscale;


public function __construct($id,$num_tel,$adr_client,$type_id,$mat_fiscale,$mat_client,$nom_client,$prenom_client)
	{
		$this->id=$id;
		$this->num_tel=$num_tel; 
		$this->adr_client=$adr_client;
		$this->type_id=$type_id;
		$this->mat_fiscale=$mat_fiscale; 
		$this->mat_client=$mat_client; 
		$this->nom_client=$nom_client;
		$this->prenom_client=$prenom_client;
		
	
	}
	
	public function addPersonne($cnx)
	{
	
		$cnx -> exec("insert into client (num_tel,adr_client,type_id,mat_client,nom_client,prenom_client ) 
		values('".$this->num_tel."','".$this->adr_client."','".$this->type_id."','".$this->mat_client."','".$this->nom_client."','".$this->prenom_client."')");	
		header("location:index.controller.php?controller=client&action=listePhysique");
	}

	public function addSociete($cnx)
	{

		$cnx -> exec("insert into client (num_tel,adr_client,type_id,mat_fiscale,nom_client ) 
		values('".$this->num_tel."','".$this->adr_client."','".$this->type_id."','".$this->mat_fiscale."','".$this->nom_client."')");	
	
		header("location:index.controller.php?controller=client&action=listeSociete");
	}



	public function supp($cnx)
	{
		$sql =("delete from client where id='".$this->id."'");
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:index.controller.php?controller=client&action=listeClient");
	}

	public function suppPhysique($cnx)
	{
		$sql =("delete from client where id='".$this->id."'");
		$nb = $cnx->exec($sql);
		header("location:index.controller.php?controller=client&action=listePhysique");
	}

	public function suppSociete($cnx)
	{
		$sql =("delete from client where id='".$this->id."'");
		$nb = $cnx->exec($sql);
		header("location:index.controller.php?controller=client&action=listeSociete");
	}


	public function getAll($cnx)
	{
		$query = 'SELECT * FROM client';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $tab;
		
	}

	public function findOne($cnx)
	{
		$query = ("SELECT * FROM client where id='".$this->id."'" );
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}


	public function edit($cnx)
	{
			$req="update  client set `num_tel` = '".$this->num_tel."' , `adr_client` = '".$this->adr_client.
			"' , `type_id` = '".$this->type_id.
			"' , `mat_fiscale` = '".$this->mat_fiscale.
			"' , `mat_client` = '".$this->mat_client.
			"' , `nom_client` = '".$this->nom_client.
			"' , `prenom_client` = '".$this->prenom_client.
			
			"' where id = '".$this->id."'";

		 $cnx->exec($req) ;
		 
		//header("location:index.controller.php?controller=client&action=listeClient");
		
	}


}
?>