<?php require("connect.php"); ?>
<?php 
		extract($_GET);
		$sql = "DELETE FROM subject WHERE subjectID='$id'";
		$result = mysqli_query($dbcon, $sql);
		$_SESSION['alert']='ลบเรียบร้อย';
		header("Location: subjectlist.php");
?>