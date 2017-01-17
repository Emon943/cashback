<?php
 session_start();
 ob_start();
 require_once 'config/config.php';
 $dbObj =	new DBUtility();
 $user_id =$_SESSION['member_id'];
 $url = $_GET["url"];
 $date = date("Y-m-d H:i:s");
 
  $sql = "insert into tbl_url
	(url,date,user_id)
	 values('".$url."', '".$date."','".$user_id."')";
     $res = $dbObj->insert($sql);
  
 ?>