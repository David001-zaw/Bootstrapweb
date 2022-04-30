<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'myuserdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];



if($user !== '' && $email !== '' && $mobile !== '' && $comments !== ''){
	$query=" INSERT INTO userinfodata(user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comments') ";
	header("Location: index.php");

	mysqli_query($con, $query);
}else{
	die('<br> Please enter the fields');
}






?>