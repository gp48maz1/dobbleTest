<?php 

function countPhotos(){
	if(!empty($_SESSION['count'])){
		//Assign Var for photo count
		$count = $_SESSION['count'];

		echo $count;

	} else{
		echo 'error';
	}

}

function photoCountName(){

}

function photoCountDigi(){

}
