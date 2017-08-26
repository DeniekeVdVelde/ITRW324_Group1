<?php 

class User{
	private $userName;
	private $passWord;
	private $email;
	private $fName;
	private $lName;
	
	public function __Construct(){
		
	}
	
	public function setUserName($username){
		$this->userName = username;
	}
	
	public function getUserName(){
		return $userName;
	}
	
	public function setPassword($passw){
		$this->passWord = passw;
	}
	
	public function getPassword(){
		return $passWord;
	}
	
	public function setEmail($email){
		$this->email = email;
	}
	public function getEmail(){
		return $email;
	}
	public function setName($fname, $lname){
		$this->fName = fname;
		$this->lName = lname;
	}
	
	public function getName(){
		$name = $this->fName . " " . $this->lName;
		return $name;
	}
	
	public function getFirstName(){
		return $this->fName;
	}
	
	public function getLastName(){
		return $this->lName;
	}
	
	public function setBirthDate($date){
		
	}
	
	public function getBirthDate(){
		
	}
	
	public function updateReputation(){
		
	}
	public function getReputation(){
		
	}
}