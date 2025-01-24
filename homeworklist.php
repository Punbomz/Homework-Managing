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
	  	$sql = "SELECT * FROM homework hw INNER JOIN subject sb ON hw.subjectID=sb.subjectID ORDER BY hw.homeworkID DESC";
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
		  <h1 class="text-center m-5">การบ้าน</h1>
			<a href="homework.php" class="btn btn-primary mb-5">เพิ่มการบ้าน</a>
			<?php if($num==0) { ?>
		  <div class="text-center">ไม่มีข้อมูล</div>
			<?php } else { ?>
			<table width="100" class="table table-borderless">
			  <tbody>
				<tr class="table-success">
				  <th width="4%" scope="col">ลำดับ</th>
				  <th width="27%" scope="col">วิชา</th>
					<th width="34%" scope="col">รายละเอียด</th>
					<th width="14%" scope="col">กำหนดส่ง</th>
					<th width="8%" scope="col">สถานะ</th>
					<th width="13%" scope="col"></th>
				</tr>
				  <?php 
				  $i = 1;
				  foreach($result as $row) { ?>
				<tr>
				  <td><?php echo($i); ?></td>
				  <td><?php echo($row['subjectName']); ?></td>
					<td><?php echo($row['detail']); ?></td>
					<td><?php echo($row['dateline']); ?></td>
					<td><?php 
							if($row['status']==0) {
								echo 'ยังไม่เสร็จ';
							} else {
								echo 'เสร็จแล้ว';
							}
					?>
					</td>
					<td class="text-center">
						<?php if($row['status']==0) { ?>
							<a href="checkhomework.php?id=<?php echo $row['homeworkID']; ?>" class="btn btn-success mr-1" onClick="return confirm('ยืนยัน?')">สำเร็จ</a>
						<?php } ?>
						<a href="edithomework.php?id=<?php echo $row['homeworkID']; ?>" class="btn btn-outline-primary mr-1" >แก้ไข</a>
						<a href="deletehomework.php?id=<?php echo $row['homeworkID']; ?>" class="btn btn-outline-danger ml-1" onClick="return confirm('ยืนยันการลบ?')">ลบ</a></td>
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