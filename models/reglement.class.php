<?php
class Reglement
{
	private $id_reglement;
	private $montant;
	private $type_reglement;
	private $num_cheq;
	private $nom_banque;
	private $nom_reglement;
	private $date_echenace;
	private $num_traite;


public function __construct($id_reglement,$montant,$type_reglement,$num_cheq,$nom_banque,$nom_reglement,$date_echenace,$num_traite)
	{
		$this->id_reglement=$id_reglement;
		$this->montant=$montant; 
		$this->type_reglement=$type_reglement;
		$this->num_cheq=$num_cheq;
		$this->nom_banque=$nom_banque;
		$this->nom_reglement=$nom_reglement; 
		$this->date_echenace=$date_echenace;
		$this->num_traite=$num_traite; 
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into reglement (montant,type_reglement, num_cheq,nom_banque,nom_reglement,date_echenace ) values('".$this->montant."','".$this->type_reglement."','".$this->num_cheq."','".$this->nom_banque."','".$this->nom_reglement."','".$this->date_echenace."','".$this->num_traite."')");	
		
		//header("location:controller.php?action=liste");
		
	}
	public function supp($cnx)
	{
		/*
		$sql = "DELETE FROM reglement WHERE email= 'dodo@gmail.com'";
		$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		header("location:controller.php?action=liste");*/
	}
	public function liste($cnx)
	{
		$query = 'SELECT * FROM reglement';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $tab;
		
	}
public function detail($cnx)
	{
		$query = 'SELECT * FROM reglement where id='.$this->id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  reglement set `montant` = '".$this->montant."' , `type_reglement` = '".$this->type_reglement."' , `num_cheq` = '".$this->num_cheq."' , `nom_banque` = '".$this->nom_banque."' , `nom_reglement` = '".$this->nom_reglement."' , `date_echenace` = '".$this->date_echenace."' , `num_traite` = '".$this->num_traite."' where id = ".$this->id_reglement;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>