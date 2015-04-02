<?php
require('core/init.php');

$_SESSION['count'] = 0;

//Create objects...
$group = new Group;

$stockPhoto = new stockPhoto;

//Create template object
$template = new Template('templates/photos.php');

//assign variables to the template object
$template->groups = $group->getAllGroups();
//....
$template->stockPhotos = $stockPhoto->getAllStockPhotos();
//....

//display template
echo $template;