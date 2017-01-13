<?php

require_once("config/config.php");
$dbObj = new DBUtility();
 $email = $_GET["email"];
  //echo $email;
 $sql = "SELECT * FROM members_details WHERE email_address = '$email'"; 
 $res = $dbObj->select($sql);

 if($res){
	echo 'Already exist!';		
	}else{
	 echo 'Avilable';
	 }

?>