<?php

include "config10.php";
session_start();
if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: chatpage10.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>