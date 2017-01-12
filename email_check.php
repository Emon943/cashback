<?php

require_once("../config/config.php");
$dbObj = new DBUtility();
$email_address = $_GET["email_address"];
$sql = "SELECT * FROM members_details WHERE email_address = '$email_address'"; 
$res = $dbObj->select($sql);

if($res){
	echo 'Already exist!';		
	}else{
	 echo 'Avilable';
	 }

?>