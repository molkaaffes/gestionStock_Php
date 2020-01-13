<?php
class reglement
{
	private $id_reglement;
	private $montant;
	private $type_reglement;
	private $num_cheq;
	private $nom_banque;
	private $nom_client;
	private $date_echeance;
	private $num_traite;


public function __construct($id_reglement,$montant,$type_reglement,$num_cheq,$nom_banque,$nom_client,$date_echeance,$num_traite)
	{
		$this->id_reglement=$id_reglement;
		$this->montant=$montant; 
		$this->type_reglement=$type_reglement;
		$this->num_cheq=$num_cheq;
		$this->nom_banque=$nom_banque;
		$this->nom_client=$nom_client; 
		$this->date_echeance=$date_echeance;
		$this->num_traite=$num_traite; 
	}
	
	public function add($cnx)
	{
		//$cnx -> exec("insert into reglement (montant,type_reglement, num_cheq,nom_banque,nom_client,date_echeance ) values('".$this->montant."','".$this->type_reglement."','".$this->num_cheq."','".$this->nom_banque."','".$this->nom_client."','".$this->date_echeance."','".$this->num_traite."')");	
		
		$cnx -> exec("insert into reglement (montant,type_reglement, num_cheq,nom_banque,nom_client,date_echeance ) values('".$this->montant."','c','".$this->num_cheq."','".$this->nom_banque."','".$this->nom_client."','".$this->date_echeance."')");	
		


		header("location:index.controller.php?controller=reglement&action=listeCheque");
		
	}

	public function getAllCheque($cnx)
	{
		$query= "select * from reglement where type_reglement like 'c'";
		 $insc=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		 return $insc;
		
	}

	public function edit($cnx)
	{
			$req="update  reglement set `montant` = '".$this->montant."' , `type_reglement` = '".$this->type_reglement."' , `num_cheq` = '".$this->num_cheq."' , `nom_banque` = '".$this->nom_banque."' , `nom_client` = '".$this->nom_client."' , `date_echeance` = '".$this->date_echeance."' , `num_traite` = '".$this->num_traite."' where id = ".$this->id_reglement;
 
		 $cnx->exec($req) ;
		 //header("location:index.controller.php?controller=reglement&action=listeCheque");
 
		
	}

	public function supp($id,$cnx)
	{
		
		$sql = ("DELETE FROM reglement WHERE id='".$id."'");
		$cnx ->exec($sql);
		header("location:index.controller.php?controller=reglement&action=listeCheque");
	}


}
?>