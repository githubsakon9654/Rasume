<?php
	session_start();
	include("connect.php");


    $strSQL = ("SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($conn,$_POST['txtUsername'])."'
     and Password = '".mysqli_real_escape_string($conn,$_POST['txtPassword'])."' ");

	$objQuery = mysqli_query($conn , $strSQL);

    $objResult = mysqli_fetch_array($objQuery ,MYSQLI_ASSOC);



	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:admin/index.php?loginsuccessfully");
			}
			else
			{
				header("location:user/index.php?loginsuccessfully");
			}
	}

?>