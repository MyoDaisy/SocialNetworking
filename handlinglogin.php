<?php
session_start();
//include '../config/config.php';
require '/config/config.php';

$query = 'SELECT * FROM user WHERE';
$query = $query.' email="'.$_POST['email'].'" AND password="'.$_POST['password'].'"';

$result = mysqli_query($dbc,$query);
$user = mysqli_fetch_assoc($result);

if($user){
	if($user['admin']==1){
		$_SESSION['admin'] = $user;
 	  	echo "Login Success!";
   		header('Location: admin');
	}
	else{
		$_SESSION['user'] = $user;
		echo "Login Success!";
		header('Location: newsfeed/newsfeed.php');
	}
    
}
else{
    echo "Login Fail!";
    header('Location: login.php');
}
?>