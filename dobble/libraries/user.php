<?php

class User{

	//init db var
	private $db;

	/*
	*
	*/
	public function __construct(){
		$this->db = new Database;
	}

	/*
	 * Get Total # Of Users
	 */
	public function getAllUsers(){
		$this->db->query('SELECT * FROM users');
		$results = $this->db->resultset();
		return $results;
	}

	/*
	 * User Login
	 */
	public function login($username, $password){
		$this->db->query("SELECT * FROM users
									WHERE username = :username
									AND password = :password			
		");
		
		//Bind Values
		$this->db->bind(':username', $username);
		$this->db->bind(':password', $password);
		
		$row = $this->db->single();

		//Check Rows
		if($this->db->rowCount() > 0){
			$this->setUserData($row);
			return true;
		} else {
			return false;
		}
	}

	/*
	 * Set User Data
	 */
	private function setUserData($row){
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row->id;
		$_SESSION['username'] = $row->username;
		$_SESSION['name'] = $row->name;
		$_SESSION['email'] = $row->email;
		$_SESSION['about'] = $row->about;
		$_SESSION['gender'] = $row->gender;
		$_SESSION['state'] = $row->state;
		$_SESSION['profession'] = $row->profession;
	}

	/*
	 * User Logout
	*/
	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['username']);
		unset($_SESSION['name']);
		unset($_SESSION['email']);
		unset($_SESSION['about']);
		unset($_SESSION['gender']);
		unset($_SESSION['state']);
		unset($_SESSION['profession']);
		return true;
	}


}