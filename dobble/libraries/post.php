<?php

class Post {
	//Initialize DB variable
	public $db;

	/*
	*	Constructor
	*/
	public function __construct(){
		$this->db = new Database;
	}

	/*
	*	 Get All Posts
	*/
	public function getAllPosts(){
		$this->db->query("SELECT 	posts.*, users.username, users.avatar
						 FROM 		posts
						 LEFT JOIN 	users
						 ON 		posts.user_id = users.id");
		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}

	/*
	*	 Get the User who posted
	*/
	/*
	public function getUserOfPost($user_id){
		$this->db->query("SELECT 	posts.*, users.username, users.avatar 
						FROM 		posts
						INNER JOIN 	users
						ON 			posts.user_id = users.id
						WHERE 		posts.user_id = :user_id
						");


		$this->db->bind(':user_id', $user_id);

		//Assign Result Set
		$results = $this->db->resultset();

		return $results;
	}
	*/

}