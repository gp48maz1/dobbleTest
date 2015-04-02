<?php
require('core/init.php');

//Create objects...
//$user = new User;

$type = new Type;
$post = new Post;
$group = new Group;

//Create template object
$template = new Template('templates/front.php');

//assign variables to the template object
$template->types = $type->getAllTypes();
//....
$template->groups = $group->getAllGroups();
//....
$template->posts = $post->getAllPosts();
//$template->poster = $post->getUserOfPost();
//....

//echo var_dump($user); die;

//display template
echo $template;