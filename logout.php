<?php
	session_start();
        unset($_SESSION['user_id']);
 	session_destroy();
	header('Location:skillshome.php');
	//to check if the session still there
	print_r($_SESSION);
	?>