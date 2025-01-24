<?php require('connect.php') ?>
<?php
		extract($_POST);

		$sql = "UPDATE subject SET subjectName='$subjectname', teacher = '$teacher' WHERE subjectID='".$_GET['id']."' ";
		$result = mysqli_query($dbcon, $sql);

		echo '<script>alert("บันทึกเรียบร้อย!")</script>';
		header("Location: subjectlist.php");
?>