<?php
require('core/init.php');

//Create objects...

$group = new Group;

//Create template object
$template = new Template('templates/groups.php');

//assign variables to the template object
$template->groups = $group->getAllGroups();
//....
//....
//....

//display template
echo $template;