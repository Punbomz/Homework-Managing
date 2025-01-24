<?php require('connect.php'); ?>
<?php 
		extract($_POST);

		$sql = "INSERT INTO homework(subjectID, userID, dateline, detail) values('$subjectID', '".$_SESSION['user']['userID']."', '$dateline', '$detail')";
		$result = mysqli_query($dbcon, $sql);

		$_SESSION['alert']='บันทึกเรียบร้อย';
		header("Location: homeworklist.php");
?>