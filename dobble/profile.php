<?php
require('core/init.php');

//Create objects...

$user = new User;

$group = new Group;

//Create template object
$template = new Template('templates/profile.php');

//assign variables to the template object
$template->users = $user->getAllUsers();
//....
$template->groups = $group->getAllGroups();
//....

//display template
echo $template;