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
		  <h1 class="text-center m-5">เพิ่มวิชาเรียน</h1>
	  </div>
	  
	  <div class="container text-center col-5">
		  <div class="row justify-content-center">
			<div class="jumbotron p-4 col-8">
				<form class="form-group" action="subjectsave.php" method="post">
					<h5 class="text-center">ชื่อวิชา</h5>
					<input name="subjectname" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุชื่อวิชา" required>
					<h5 class="text-center">อาจารย์ผู้สอน</h5>
					<input name="teacher" class="form-control form-text mb-4 text-center" type="text" placeholder="ระบุอาจารย์ผู้สอน" required>
					
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