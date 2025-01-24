<?php require("connect.php"); ?>
<?php 
		extract($_GET);
		$sql = "DELETE FROM homework WHERE homeworkID='$id'";
		$result = mysqli_query($dbcon, $sql);
		$_SESSION['alert']='ลบเรียบร้อย';
		header("Location: homeworklist.php");
?>