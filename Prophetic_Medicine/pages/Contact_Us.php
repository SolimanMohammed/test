<?php
  if(!empty($_POST["send"])) {
	$UserName = $_POST["UserName"];
	$UserEmail = $_POST["UserEmail"];
	$Subject = $_POST["Subject"];
	$Content = $_POST["Content"];

	$DB_Conn = mysqli_connect("localhost", "root", "", "prophetic") or die("Connection Error: " . mysqli_error($DB_Conn));
	mysqli_query($DB_Conn, "INSERT INTO messages (UserName, UserEmail, Subject, Content)
	VALUES ('" . $UserName. "', '" . $UserEmail. "','" . $Subject. "','" . $Content. "')");
	$insert_id = mysqli_insert_id($DB_Conn);
	//if(!empty($insert_id)) {
	   $message = "تم الارسال بنجاح";
	   $type = "تم الارسال بنجاح";
	//}
  }
  require_once "Contact_View.php";
?>