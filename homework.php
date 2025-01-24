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
	  ?>
	
	  <div class="container text-center justify-content-center col-12">
		  <h1 class="text-center m-5">เพิ่มการบ้าน</h1>
	  </div>
	  
	  <div class="container text-center col-5">
		  <div class="row justify-content-center">
			<div class="jumbotron p-4 col-8">
				<form class="form-group" action="homeworksave.php" method="post">
					<div class="row justify-content-center mb-4">
						<h5 class="m-2">วิชา</h5>
					<select name="subjectID" class="form-control text-center col-4" required>
						<option class="text-center" value="">--เลือก--</option>
						<?php foreach($result as $row) { ?>
						<option class="text-center" value="<?php echo $row['subjectID'] ?>"><?php echo $row['subjectName']; ?></option>
						<?php } ?>
					</select>
					</div>
					
					<div class="row justify-content-center mb-4">
					<h5 class="m-2">กำหนดส่ง</h5>
					<input name="dateline" class="form-control form-text mb-4 text-center col-5" type="datetime-local" required>
					</div>
					
					<h5 class="m-2">รายละเอียด</h5>
					<div class="row justify-content-center mb-4">
					<textarea rows="5" class="form-control" name="detail" placeholder="ระบุรายละเอียด"></textarea>
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