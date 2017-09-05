<?php
	session_start();
	if (! isset($_SESSION['admin'])) {
	    header('Location: ../../mainsite/login.php');
	}
	include '../../config/config.php';

	if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range'=>1)))
	{
		$id=$_GET['id'];
		$query="DELETE FROM user WHERE id={$id}";
		$result=mysqli_query($dbc,$query);
		header('Location:index.php');
	}
	else{
		header('Location:index.php');
	}
?>