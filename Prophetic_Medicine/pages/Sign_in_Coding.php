<?php
  session_start();
	$UserEmail=$_POST['UserEmail'];
	$UserPassword=$_POST['UserPassword'];

	$DB_Conn=mysqli_connect("localhost","root","","prophetic") or die(mysqli_error($DB_Conn));

	$Check_User=mysqli_query($DB_Conn,"select * from users where Email='$UserEmail' and Password='$UserPassword'") or die(mysqli_error($DB_Conn));
	$Result=mysqli_fetch_array($Check_User);

	$FullName=$Result['FullName'];
	$Email=$Result['Email'];
	$UserID=$Result['ID'];
	$Type=$Result['Type'];

	if($Result && $Type == 'User')
	{
	  header ("location: Medicine.php");
	  $_SESSION['FullName']=$FullName;
	  $_SESSION['Email']=$Email;
	  $_SESSION['Type']=$Type;
	  $_SESSION['ID']=$UserID;
	}	

	else if ($Result && $Type == 'Admin')
	{
	  header ("location: Admin.php");
	  $_SESSION['FullName']=$FullName;
	  $_SESSION['Type']=$Type;
	}	
		
	else if ($Result && $Type == 'Specialist')
	{
	  header ("location: Home_Specialist.php");
	  $_SESSION['FullName']=$FullName;
	  $_SESSION['Type']=$Type;
	  $_SESSION['ID']=$UserID;
	} 

	else
?>
	  <script>
		if (confirm("Please Enter Valid Email & Password!") == true) {
		  text = location.replace("Sign_in.php");
		}
	  </script>