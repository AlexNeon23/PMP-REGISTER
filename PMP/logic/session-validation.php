<?php session_start();

if (!$_SESSION['initial']) {
	header('location : login.php');
}
    

?>
<a href="die-session.php">cerrar session</a>