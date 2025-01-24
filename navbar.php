<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="homeworklist.php"> การบ้าน </a> </li>
          <li class="nav-item"> <a class="nav-link" href="subjectlist.php">วิชาเรียน</a> </li>
          <li class="nav-item"> <a class="nav-link" href="aboutme.php">เกี่ยวกับฉัน</a> </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
			<?php if(isset($_SESSION['logined'])) { ?>
				<div class="mr-2"><?php echo($_SESSION['user']['fullName']); ?></div>
				<a href="logout.php" class="btn btn-danger my-2 my-sm-0">ออกจากระบบ</a>
			<?php } else { ?>
				<a href="login.php" class="btn btn-outline-success my-2 my-sm-0">เข้าสู่ระบบ</a>
			<?php } ?>
          
        </form>
      </div>
    </nav>