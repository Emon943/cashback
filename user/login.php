<?php
session_start();
ob_start();    //----Output Buffer------//
require_once("../config/config.php");
$dbObj = new DBUtility();
$email_address = $_POST["email_address"];
$password = md5($_POST["password"]);

$sql = "SELECT * FROM members_details WHERE email_address = '$email_address' and password = '$password'";
$res = $dbObj->select($sql);
$count = count($res);

    if ($count == 1) {
        $_SESSION['user'] = $email_address;
		$_SESSION['first_name'] = $res[0]["first_name"];
       $_SESSION['member_id'] = $res[0]["member_id"];
	   
        header("Location:../index_user.php");


    } else {
        echo "<div id='errorlogin' style='
					position:fixed;
					top: 50%;
					left: 40%;
					border:2px solid #a1a1a1;
					padding:10px 40px; 
					background:#dddddd;
					width:300px;
					border-radius:25px;'
					>
			Wrong Email or Password...Pls Retype UserName & Password Again..
			</div>";

        echo "<meta http-equiv='refresh' content='3; URL=../index_user.php'>";
    }

?>

