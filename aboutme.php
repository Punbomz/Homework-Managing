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
		  <h1 class="text-center m-5">เกี่ยวกับฉัน</h1>
	  </div>
	  
	  <div class="container text-center col-5">
		  <div class="row justify-content-center">
			<div class="jumbotron p-4 col-8">
				
					<h5 class="text-center">ชื่อผู้ใช้</h5>
					<div name="username" class="form-control form-text mb-4 text-center"><?php echo($row['userName']); ?></div>
					<h5 class="text-center">รหัสผ่าน</h5>
					<div name="pass" class="form-control form-text mb-4 text-center">**********</div>
					<h5 class="text-center">ชื่อ-สกุล</h5>
					<div name="fullname" class="form-control form-text mb-4 text-center"><?php echo($row['fullName']); ?></div>
					<h5 class="text-center">สถานศึกษา</h5>
					<div name="school" class="form-control form-text mb-4 text-center"><?php echo($row['school']); ?></div>
					<h5 class="text-center">ระดับการศึกษา</h5>
					<div name="edu" class="form-control form-text mb-4 text-center"><?php
						if($row['educationLv'] == 1) echo 'ประถมศึกษา';
						elseif($row['educationLv'] == 2) echo 'มัธยมศึกษา';
						elseif($row['educationLv'] == 3) echo 'อุดมศึกษา';
						?></div>
				
			</div>
			  </div>
		  <a href="updateme.php" class="btn btn-primary">แก้ไข</a>
	  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>