<?php
class admin {
//initialisation des attributs de l’objet voiture
private $login;
private $pass;

//constructeur
public function __construct($login,$pass)
{
	$this->login=$login;
	$this->pass=$pass;
}


    //methode login
    public function login($cnx){

	$this->pass=md5(sha1($this->pass));
	   $req=$cnx->query("select * from user where login='".$this->login."' and password='".$this->pass."'");
	   $verif=$req->rowCount();
	   //var_dump($verif);
	  // var_dump($this->pass);
	   if($verif==1)
				{
				session_start();
				$_SESSION['login']=$this->login;
				$_SESSION['pass']=$this->pass;
				$_SESSION['auth']=true;
				header("location:index.controller.php?controller=admin&action=connect");
				}
	   else
				{ $_SESSION['auth']=false;
				header("location:index.controller.php?controller=admin&action=erreur");
				}
        }
		
		
    public function logout(){
		$_SESSION['auth']=false;
		header("location:index.controller.php?controller=admin&action=erreur");
        }

}

?>