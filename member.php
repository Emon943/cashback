<?php
    session_start();
    include 'config/config.php';
	 $dbObj =	new DBUtility();
	
	$msg="Thank You For Being With Us";
	if(isset($_POST['submit']))
	{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email_address=$_POST['email_address'];
	$password=md5($_POST['password']);
	$ref = $_POST['ref'];
	
	
	$sql="INSERT INTO refferal_member(f_name,l_name,email_address,password,ref_id)
	VALUES ('".$fname."', '".$lname."', '".$email_address."','".$password."','".$ref."')";
	
	 

	if (mysql_query($sql)) {
		
		header('Location:index_user.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error();
	}
	}



    ?>