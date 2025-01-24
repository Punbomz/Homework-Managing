<?php require('connect.php') ?>
<?php
		extract($_POST);

		$sql = "UPDATE user SET userName='$username', userPass = '$pass', fullName='$fullname', school='$school', educationLv='$edu' WHERE userID='".$_SESSION['user']['userID']."' ";
		$result = mysqli_query($dbcon, $sql);

		echo '<script>alert("บันทึกเรียบร้อย!")</script>';
		header("Location: aboutme.php");
?>