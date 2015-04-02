<?php

class Group {
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
	public function getAllGroups(){
		$this->db->query("SELECT * FROM groups");
		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}

}