<?php
session_start();
if (! isset($_SESSION['admin'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../css/admin/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/admin//font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../css/admin/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
	<div id="wrapper">         
        <?php include 'include/header.php';?>         
        <!-- /. NAV TOP  -->
        <?php include 'include/leftmenu.php';?>
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-lg-12">
						<h2>ADMIN DASHBOARD</h2>
					</div>
				</div>
				<!-- /. ROW  -->
				<hr />

				<!-- /. ROW  -->
				<div class="row text-center pad-top">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
						<div class="div-square">
							<a href="blank.html"> <i class="fa fa-comments-o fa-5x"></i>
								<h4>Danh mục (10)</h4>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
						<div class="div-square">
							<a href="blank.html"> <i class="fa fa-circle-o-notch fa-5x"></i>
								<h4>Tin tức (10)</h4>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
						<div class="div-square">
							<a href="blank.html"> <i class="fa fa-envelope-o fa-5x"></i>
								<h4>Thành viên (10)</h4>
							</a>
						</div>
					</div>
				</div>
				<!-- /. ROW  -->
			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
    <?php include "include/footer.php"; ?>
   
</body>
</html>
