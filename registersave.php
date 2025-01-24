<?php require('connect.php'); ?>
<?php 
		extract($_POST);

		$sql = "INSERT INTO user(userName, userPass, fullName, school, educationLv) values('$username', '$pass', '$fullname', '$school', '$edu')";
		$result = mysqli_query($dbcon, $sql);

		$_SESSION['alert']='ลงทะเบียนเรียบร้อย';
		header("Location: login.php");
?>