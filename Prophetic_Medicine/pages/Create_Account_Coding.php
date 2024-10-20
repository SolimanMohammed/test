<?php
  $FullName=$_POST['FullName'];
  $City=$_POST['City'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];

  $DB_Conn = mysqli_connect("localhost","root","","prophetic") or die(mysqli_error($DB_Conn));
  $Check_User = "SELECT * from users where Email = '$Email'";
  $Result = mysqli_query($DB_Conn,$Check_User);
  $Count = mysqli_num_rows($Result);

  if($Count>0){		
  ?>
	<script>
	  if (confirm("Sorry this Email is Already Exists!") == true) {
	    text = location.replace("Create_Account.php");
	  }
	</script>

  <?php
	exit();
  }

  else {
	$Query=mysqli_query($DB_Conn,"INSERT INTO users (FullName, City, Email, Password, Type)
	Values ('$FullName','$City','$Email','$Password','User')") or die(mysqli_error($DB_Conn));
  ?>
	<script>
	  if (confirm("Congratulations, You have been Registered Successfully!") == true) {
		text = location.replace("Sign_in.php");
	  }
	</script>
  <?php
  }
?>	