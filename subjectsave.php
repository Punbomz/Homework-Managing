<?php require('connect.php'); ?>
<?php 
		extract($_POST);

		$sql = "INSERT INTO subject(subjectName, teacher) values('$subjectname', '$teacher')";
		$result = mysqli_query($dbcon, $sql);

		$_SESSION['alert']='บันทึกเรียบร้อย';
		header("Location: subjectlist.php");
?>