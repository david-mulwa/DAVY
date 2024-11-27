<?php
session_start();

$username="";
$email="";

$errors=array();


$db =mysqli_connect('localhost','root','','assignment') or die("could not connect to database");

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$pass_1 = mysqli_real_escape_string($db, $_POST['pass_1']);
$pass_2 = mysqli_real_escape_string($db, $_POST['pass_2']);
//form validation
if(empty($username)) (array_push($errors, "username is required"));
if(empty($email)) (array_push($errors, "email is required"));
if(empty($pass_1)) (array_push($errors, "password is required"));
if($pass_1 !=$pass_2) (array_push($errors, "password does not match"));

$user_check_query="SELECT * FROM user WHERE username='$username' or email='$email' LIMIT 1";
$results=mysqli_query($db, $user_check_query);
$user=mysqli_fetch_assoc($results);

if ($user) {
	if ($user['username'] == $username) {
		array_push($errors, "username already exists");
	};
	if ($email['email'] == $email) {
		array_push($errors, "email id already used");
	};
};
if (count($errors)== 0) {
	$pass =md5($pass_1);
	$query ="INSERT INTO user (username,email,pass) VALUES ('$username','$email','$pass')";
	mysqli_query($db,$query);
	$_SESSION['username']=$username;
	$_SESSION['success']= "You are now logged in";
	header('location: index.php');

};







?>