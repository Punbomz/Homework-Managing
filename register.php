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
	
	  <div class="container text-center justify-content-center col-12">
		  <h1 class="text-center m-5">ลงทะเบียน</h1>
	  </div>
	  
	  <div class="container text-center col-5">
		  <div class="row justify-content-center">
			<div class="jumbotron p-4 col-8">
				<form class="form-group" action="registersave.php" method="post">
					<h5 class="text-center">ชื่อผู้ใช้</h5>
					<input name="username" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุชื่อผู้ใช้" required>
					<h5 class="text-center">รหัสผ่าน</h5>
					<input name="pass" class="form-control form-text mb-4 text-center" type="password" placeholder="ระบุรหัสผ่าน" required>
					<h5 class="text-center">ชื่อ-สกุล</h5>
					<input name="fullname" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุชื่อ-สกุล" required>
					<h5 class="text-center">สถานศึกษา</h5>
					<input name="school" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุสถานศึกษา" required>
					
					<div class="row justify-content-center mb-4">
						<div class="m-2">ระดับการศึกษา</div>
					<select name="edu" class="form-control text-center col-3" required>
						<option class="text-center" value="">--เลือก--</option>
						<option class="text-center" value="1">ประถมศึกษา</option>
						<option class="text-center" value="2">มัธยมศึกษา</option>
						<option class="text-center" value="3">อุดมศึกษา</option>
					</select>
						</div>
					<div class="row justify-content-center"><button type="submit" class="btn-primary form-control w-auto">สมัครสมาชิก</button></div>
				</form>
			</div>
			  </div>
		  มีบัญชีแล้ว? <a href="login.php">เข้าสู่ระบบ</a>
	  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>