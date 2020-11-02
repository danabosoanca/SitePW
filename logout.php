<?php 

	session_start();//start session if session not start


unset($_SESSION['logged']);

header('Location: client.php');