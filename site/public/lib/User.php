<?php

include_once 'Session.php';
include 'Database.php';
class User
{
	private $db;
	public function _construct(){
		$this->db =new Database();

	}

	public function userRegistration($data){
		$name = $data['name'];
		$username =$data['username'];
		$email =$data['email'];
		$password =md5($data['password']);

		$chk_email=$this->emailCheck($email);

		if($name == "" OR $username == "" OR $email == "" OR $password == "") {
			$msg = "<div class='alert alert-warning' role='alert' ><strong>Error ! </strong>Field must not be empty! </div>";
			return $msg;
		}
		if (strlen($username)<3){
			$msg = "<div class='alert alert-warning' role='alert'><strong>Error ! </strong>Username is too short!</div>";
			return $msg;
		}
		elseif (preg_match('/[^a-z0-9_-]+/i',$username)) {
			$msg = "<div class='alert alert-warning' role='alert' ><strong>Error ! </strong>Username must be contain alphanumerical,dashes and underscores!</div>";
			return $msg;
		}
		if (filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
			$msg = "<div class='alert alert-warning' role='alert'><strong>Error ! </strong>Email address is not valid!</div>";
			return $msg;

		}

		if($chk_email==true){
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Email address is already exist!</div>";
			return $msg;
		}
		$sql = "INSERT INTO tbl_user (name,username,email,password) VALUES(:name,:username,:email,:password)";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':name', $name);
		$query->bindValue(':username', $username);
		$query->bindValue(':email', $email);
		$query->bindValue(':password', $password);
		$result->execute();
		if($result) {
			$msg = "<div class='alert alert-success'> <strong> Success ! </strong> Thank You have been registered!</div>";
			return $msg;
		}else{
			$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Sorry! There has been  problem,insert your details! </div>";
			return $msg;
		}
	}



	public function emailCheck($email){
		$sql ="SELECT email  FROM tbl_user WHERE email = :email";
		$query = $this->db->PDO->prepare($sql);
		$query->bindValue(':email', $email);
		$query->execute();
		if($query->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
}
?>