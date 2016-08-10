<?php 
session_start();


//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dev_assessment";

$conn = mysqli_connect($servername, $username,'', $dbname);

if(isset($_POST['login_btn'])){

	$username = ($_POST['username']);
	$password = ($_POST['password']);

	$password = md5($password);
	$sql = "SELECT * FROM user_account WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) == 1){
		$_SESSION['message'] = "You are now logged in!";
		$_SESSION['username'] = $username;
		header("location: home.php");
	}else{
		$_SESSION['message'] = "Incorrect Username/Password";
		header("location: index.php");
	}

}
?>