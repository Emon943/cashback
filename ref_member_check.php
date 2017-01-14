<?php

require_once("config/config.php");
 $dbObj = new DBUtility();
 $ref_id = $_GET["ref_id"];

  $sql = "SELECT * FROM members_details WHERE ref_id = '$ref_id'"; 
  $res = $dbObj->select($sql);

 if($res){
	 echo 'Match Reference ID!';		
	}else{
	 echo 'Not Match Ref. ID';
	 }

?>