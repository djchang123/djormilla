<?php
/*------------------------------------
	   YOUR EMAIL GOES HERE
--------------------------------------*/
$to = '<dresoftware@yahoo.com>';


//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$subject = ($_GET['subject']) ?$_GET['subject'] : $_POST['subject'];
$comment = ($_GET['comment']) ?$_GET['comment'] : $_POST['message'];


mail($to,$subject,$comment,$email);
?>
