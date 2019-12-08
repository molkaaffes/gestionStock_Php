<?php
 session_start();
class Article  
{
	private $id_artcile;
	private $lib_article;
	private $prix_HT;
	private $TVA;
	private $qte_article;
	private $photo_article;
	private $description_article;
	private $num_artcile;
	


public function __construct($id_article,$lib_article,$prix_HT,$TVA,$qte_article,$photo_article,$description_article,$num_artcile)
	{
		$this->id_article=$id_article;
		$this->lib_article=$lib_article; 
		$this->prix_HT=$prix_HT;
		$this->TVA=$TVA;
		$this->qte_article=$qte_article;
		$this->photo_article=$photo_article; 
		$this->description_article=$description_article;
		$this->num_artcile=$num_artcile;
		
	}
	
	public function add($cnx)
	{
		$cnx -> exec("insert into article (lib_article,prix_HT, TVA,qte_article,photo_article,description_article,num_artcile ) values('".$this->lib_article."','".$this->prix_HT."','".$this->TVA."','".$this->qte_article."','".$this->photo_article."','".$this->description_article."','".$this->num_artcile."')");	
		$query = 'SELECT * FROM article';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		include "Views/client/client_liste.php";
		//return View("views/article_liste.php", tab);
		//return RedirectToAction("liste");
		//header("location:index.controller.php?action=afficheForm&controller=article");
	//	return Redirect::back()->with('msg', 'succs');
		
	}
	public function supp($cnx)
	{
	
		$sql = "DELETE FROM article WHERE where id='.$this->id";
		$cnx->exec($sql) ;
		/*$nb = $cnx->exec($sql);
		echo $nb.' membres ont été supprimés.';	
		unlink("photos/".$this->photo);
		header("location:controller.php?action=liste");*/
	}
	public function liste($cnx)
	{
		$query = 'SELECT * FROM article';
		$tab=$cnx->query($query)->fetchAll(PDO::FETCH_OBJ);
		//include "views/article/article_liste.php";
		//includeWithVariables('views/article/article_liste.php', $tab);
		return $tab;
		
	}
	public function findOne($id,$cnx)
	{
		$query = 'SELECT * FROM article where id='.$id ;
		$tab=$cnx->query($query)->fetch(PDO::FETCH_OBJ);
		return $tab;
		
	}
	public function edit($cnx)
	{
			$req="update  article set `lib_article` = '".$this->lib_article."' , `prix_HT` = '".$this->prix_HT."' , `TVA` = '".$this->TVA."' , `qte_article` = '".$this->qte_article."' , `photo_article` = '".$this->photo_article."' , `description_article` = '".$this->description_article."' , `num_artcile` = '".$this->num_artcile."' where id = ".$this->id;
 
		 $cnx->exec($req) ;
		// header("location:controller.php?action=liste");
 
		
	}


}
?>