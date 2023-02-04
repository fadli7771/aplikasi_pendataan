<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if ($username == "fadli" && $password == "123"){
	$_SESSION['username'] = $username;
	header("location:tampil_admin.php");
}else{
	header("location:tampil_admin.php");
}
?>