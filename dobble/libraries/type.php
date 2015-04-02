<?php

class Type {
	//Initialize DB variable
	public $db;

	/*
	*	Constructor
	*/
	public function __construct(){
		$this->db = new Database;
	}

	/*
	*	 Get All Types
	*/
	public function getAllTypes(){
		$this->db->query("SELECT * FROM types");
		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}

}