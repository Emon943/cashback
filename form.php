 <?php
    include 'config/config.php';
	 $dbObj =	new DBUtility();
	
	$msg="Thank You For Being With Us";
	if(isset($_POST['submit']))
	{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email_address=$_POST['email_address'];
	$password=md5($_POST['password']);

	$sql="INSERT INTO members_details(first_name,last_name,email_address,password)
	VALUES ('".$fname."', '".$lname."', '".$email_address."','".$password."')";

	if (mysql_query($sql)) {
		echo $msg;
		header('Location:login.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error();
	}
	}



    ?>