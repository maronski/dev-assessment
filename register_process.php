<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dev_assessment";

$conn = mysqli_connect($servername, $username,'', $dbname);

if(isset($_POST['register_btn'])){

$firstname = ($_POST['firstname']);
$lastname = ($_POST['lastname']);
$email = ($_POST['email']);
$role_position = ($_POST['position_select']);


$username = ($_POST['username']);
$password = ($_POST['password']);
$password2 = ($_POST['password2']);

 if($password == $password2){
 	if(!empty($_POST['position_select'])){
    $password = md5($password);
    $sql = "INSERT INTO user_account (username,password) VALUES ('$username', '$password'); 
    		INSERT INTO account_info (firstname, lastname, email, role_position) VALUES ('$firstname', '$lastname', '$email', '$role_position')";

    mysqli_multi_query($conn, $sql);
    $_SESSION['message'] = "You are now logged in";
    $_SESSION['username'] = $username;
    header("location: home.php");
}
 }else{
    $_SESSION['message'] = "Password do not match";
 }
}

?>