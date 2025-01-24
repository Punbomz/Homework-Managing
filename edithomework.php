<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo(web_title); ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  </head>
  <body>
    <?php require('navbar.php'); ?>
	  <?php
	  	$sql = "SELECT * FROM subject ORDER BY subjectName ASC";
	  	$result = mysqli_query($dbcon, $sql);
	  
	  	$sql2 = "SELECT * FROM homework WHERE homeworkID='".$_GET['id']."'";
	  	$result2 = mysqli_query($dbcon, $sql2);
		$row2 = mysqli_fetch_assoc($result2);
	  ?>
	
	  <div class="container text-center justify-content-center col-12">
		  <h1 class="text-center m-5">แก้ไขการบ้าน</h1>
	  </div>
	  
	  <div class="container text-center col-5">
		  <div class="row justify-content-center">
			<div class="jumbotron p-4 col-8">
				<form class="form-group" action="homeworkupdate.php?id=<?php echo $_GET['id']; ?>" method="post">
					<div class="row justify-content-center mb-4">
						<h5 class="m-2">วิชา</h5>
					<select name="subjectID" class="form-control text-center col-4" required>
						<option class="text-center" value="">--เลือก--</option>
						<?php foreach($result as $row) { ?>
						<option class="text-center" value="<?php echo $row['subjectID'] ?>" <?php if($row2['subjectID']==$row['subjectID']) echo 'selected'; ?> ><?php echo $row['subjectName']; ?></option>
						<?php } ?>
					</select>
					</div>
					
					<div class="row justify-content-center mb-4">
					<h5 class="m-2">กำหนดส่ง</h5>
					<input name="dateline" class="form-control form-text mb-4 text-center col-5" type="datetime-local" value="<?php echo $row2['dateline']; ?>" required>
					</div>
					
					<h5 class="m-2">รายละเอียด</h5>
					<div class="row justify-content-center mb-4">
					<textarea rows="5" class="form-control" name="detail" placeholder="ระบุรายละเอียด"><?php echo $row2['detail']; ?></textarea>
					</div>
					
					<div class="row justify-content-center mb-4">
						<h5 class="m-2">สถานะ</h5>
					<select name="status" class="form-control text-center col-4" required>
						<option class="text-center" value="0" <?php if($row2['status']==0) echo 'selected'; ?>>ยังไม่เสร็จ</option>
						<option class="text-center" value="1" <?php if($row2['status']==1) echo 'selected'; ?>>เสร็จแล้ว</option>
					</select>
					</div>
					
					<div class="row justify-content-center"><button type="submit" class="btn-primary form-control w-auto">บันทึก</button></div>
				</form>
			</div>
			  </div>

	  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>