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

}