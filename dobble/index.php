<?php
require('core/init.php');

//Create objects...
//$user = new User;
$type = new Type;
$post = new Post;
$group = new Group;


//basic idea is inseatd of using $_GET and being on a specific page i want to do that within the loop that is happening...
//$post_id = $_SESSION['post_id'];
//$post_id = null;

//Create template object
$template = new Template('templates/front.php');

//assign variables to the template object

//....
$template->types = $type->getAllTypes();
//....
$template->groups = $group->getAllGroups();
//....
$template->posts = $post->getAllPosts();
$template->replies = $post->getReplies();
//....

//echo var_dump($post_id); die;

//display template
echo $template;