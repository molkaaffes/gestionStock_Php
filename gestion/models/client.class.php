<?php
class Client
{
	private $id_client;
	private $num_tel;
	private $adr_client;
	private $type_id;
	private $id_personne;
	private $mat_client;
	private $nom_client;
	private $prenom_client;
	private $id_societe;
	private $mat_fiscale;


public function __construct($id_client,$num_tel,$adr_client,$type_id,$id_personne,$mat_client,$nom_client,$prenom_client,$id_societe,$mat_fiscale)
	{
		$this->id_client=$id_client;
		$this->num_tel=$num_tel; 
		$this->adr_client=$adr_client;
		$this->type_id=$type_id;

		$this->id_personne=$id_personne;
		$this->mat_client=$mat_client; 
		$this->nom_client=$nom_client;
		$this->prenom_client=$prenom_client;
		
		$this->id_societe=$id_societe; 
		$this->mat_fiscale=$mat_fiscale; 
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into client (num_tel,adr_client, type_id,mat_fiscale,mat_client,nom_client,prenom_client ) values('".$this->num_tel."','".$this->adr_client."','".$this->type_id."','".$this->mat_fiscale."','".$this->mat_client."','".$this->nom_client."','".$this->prenom_client."')");	
		
		//header("location:controller.php?action=liste");
		
	}
	public function supp($cnx)
	{
		/*
		$sql = "DELETE FROM client WHERE email= 'dodo@gmail.com'";
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:controller.php?action=liste");*/
	}
	public function liste($cnx)
	{
		$query = 'SELECT * FROM client';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $tab;
		
	}
public function detail($cnx)
	{
		$query = 'SELECT * FROM client where id='.$this->id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  client set `num_tel` = '".$this->num_tel."' , `adr_client` = '".$this->adr_client."' , `type_id` = '".$this->type_id."' , `mat_fiscale` = '".$this->mat_fiscale."' , `mat_client` = '".$this->mat_client."' , `nom_client` = '".$this->nom_client."' , `prenom_client` = '".$this->prenom_client."' where id = ".$this->id;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>