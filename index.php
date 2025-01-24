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
    <header>
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-12">
				<h1 class="text-center">🔥เหนื่อยวันนี้... สบายวันหน้า...🔥</h1>
				<?php if(!isset($_SESSION['logined'])) { ?>
              <p>&nbsp;</p>
              <p class="text-center"><a class="btn btn-primary btn-lg" href="login.php" role="button">เข้าสู่ระบบ</a> </p>
				<?php } ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>

      <div class="container ">
        <div class="row text-center justify-content-center">
          	<img src="images/fire.jpg" class="img-fluid">
		  </div> 
      </div>
      
      
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>