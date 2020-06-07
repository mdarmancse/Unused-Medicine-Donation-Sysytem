	<?php

	class Database
	{
		private $hostdb="localhost";
		private $userdb="root";
		private $passdb="";
		private $namedb="db_lr";
		protected $pdo;
	   public function _construct(PDO $pdo){
	   		$this->pdo=$pdo;
	   		try{
	   			$pdo=new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb,$this->userdb,$this->passdb);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo->exec("SET CHARACTER SET utf8");
				
	   		}catch(PDOException $e){
	   			die("Failed to connect with Database".$e->getmassage());

	   		}
	   	}



	}