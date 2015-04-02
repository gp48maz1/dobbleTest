<?php

class stockPhoto {
	//Initialize DB variable
	private $db;

	/*
	*	Constructor
	*/
	public function __construct(){
		$this->db = new Database;
	}

	/*
	 * Get all stock Photos
	 */
	public function getAllStockPhotos(){
		$this->db->query('SELECT * FROM stockPhotos');
		$results = $this->db->resultset();
		return $results;
	}

}