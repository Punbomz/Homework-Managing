<?php require('connect.php') ?>
<?php
		extract($_POST);

		$sql = "UPDATE homework SET subjectID='$subjectID', dateline = '$dateline', detail = '$detail', status='$status' WHERE homeworkID='".$_GET['id']."' ";
		$result = mysqli_query($dbcon, $sql);

		echo '<script>alert("บันทึกเรียบร้อย!")</script>';
		header("Location: homeworklist.php");
?>