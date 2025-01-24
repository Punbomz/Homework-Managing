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
	  	$sql = "SELECT * FROM subject ORDER BY subjectID DESC";
	  	$result = mysqli_query($dbcon, $sql);
	  	$num = mysqli_num_rows($result);
	  ?>
    <header>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12">
				<h1 class="text-center">🔥เหนื่อยวันนี้... สบายวันหน้า...🔥</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
		
		<div class="container text-center justify-content-center col-12">
		  <h1 class="text-center m-5">วิชาเรียน</h1>
			<a href="subject.php" class="btn btn-primary mb-5">เพิ่มวิชาเรียน</a>
			<?php if($num==0) { ?>
				<div class="text-center">ไม่มีข้อมูล</div>
			<?php } else { ?>
			<table width="100" class="table table-borderless">
			  <tbody>
				<tr class="table-success">
				  <th width="4%" scope="col">ลำดับ</th>
				  <th width="51%" scope="col">ชื่อวิชา</th>
				  <th width="36%" scope="col">อาจารย์ผู้สอน</th>
					<th width="9%" scope="col"></th>
				</tr>
				  <?php 
				  $i = 1;
				  foreach($result as $row) { ?>
				<tr>
				  <td><?php echo($i); ?></td>
				  <td><?php echo($row['subjectName']); ?></td>
				  <td><?php echo($row['teacher']); ?></td>
					<td class="text-center"><a href="editsubject.php?id=<?php echo $row['subjectID']; ?>" class="btn btn-outline-primary mr-1" >แก้ไข</a>
						<a href="deletesubject.php?id=<?php echo $row['subjectID']; ?>" class="btn btn-outline-danger ml-1" onClick="return confirm('ยืนยันการลบ?')">ลบ</a></td>
				</tr>
				  <?php $i++; } ?>
			  </tbody>
			</table>
			<?php } ?>
	  </div>
      
      
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>