<?php 

include('core/init.php');

	if(isset($_POST['do_login'])){
		//Get Vars
		$username = $_POST['username'];
		//wrap password in md5 later...
		$password = $_POST['password'];

		//Create User Object
		$user = new User;

		if($user->login($username, $password)){
			redirect('index.php', 'You have been logged in!', 'success');
		}else{
			redirect('index.php', 'That login is not valid', 'error');
		}


	} else {
		//this is if the user just types in talkingspace/login.php without filling in the proper information
		redirect('index.php');
	}
