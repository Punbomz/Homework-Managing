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
	  	$sql = "SELECT * FROM user WHERE userID='".$_SESSION['user']['userID']."'";
	  	$result = mysqli_query($dbcon, $sql);
	  	$row = mysqli_fetch_assoc($result);
	  ?>
	
	  <div class="container text-center justify-content-center col-12">
		  <h1 class="text-center m-5">แก้ไขข้อมูลเกี่ยวกับฉัน</h1>
	  </div>
	  
	  <div class="container text-center col-5">
		  <div class="row justify-content-center">
			<div class="jumbotron p-4 col-8">
				<form class="form-group" action="meupdatesave.php" method="post">
					<h5 class="text-center">ชื่อผู้ใช้</h5>
					<input name="username" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุชื่อผู้ใช้" value="<?php echo $row['userName']; ?>" required>
					<h5 class="text-center">รหัสผ่าน</h5>
					<input name="pass" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุรหัสผ่าน" value="<?php echo $row['userPass']; ?>" required>
					<h5 class="text-center">ชื่อ-สกุล</h5>
					<input name="fullname" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุชื่อ-สกุล" value="<?php echo $row['fullName']; ?>" required>
					<h5 class="text-center">สถานศึกษา</h5>
					<input name="school" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุสถานศึกษา" value="<?php echo $row['school']; ?>" required>
					
					<div class="row justify-content-center mb-4">
						<div class="m-2">ระดับการศึกษา</div>
					<select name="edu" class="form-control text-center col-3" required>
						<option class="text-center" value="">--เลือก--</option>
						<option class="text-center" value="1" <?php if($row['educationLv']==1) echo 'selected'; ?>>ประถมศึกษา</option>
						<option class="text-center" value="2" <?php if($row['educationLv']==2) echo 'selected'; ?>>มัธยมศึกษา</option>
						<option class="text-center" value="3" <?php if($row['educationLv']==3) echo 'selected'; ?>>อุดมศึกษา</option>
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