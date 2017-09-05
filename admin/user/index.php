<?php
session_start();
if (! isset($_SESSION['admin'])) {
    header('Location: ../../mainsite/login.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../../css/admin/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../../css/admin//font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../../css/admin/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
	<div id="wrapper">         
        <?php include '../include/header.php';?>         
        <!-- /. NAV TOP  -->
        <?php include '../include/leftmenu.php';?>
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-lg-12">
						<h2>User Management</h2>
					</div>
				</div>
				<!-- /. ROW  -->
				<hr />
	
				<!-- /. ROW  -->				
				<table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Profile Picture</th>
                            <th>Birthday</th>
                            <th>Address</th>
                            <th>Admin</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "../../config/config.php";
                            $query='SELECT * FROM user ORDER BY id DESC'  ;
                            $result=mysqli_query($dbc,$query);
                            while ($user=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                                
                                ?>
                                <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['password']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['profile_picture']; ?></td>
                                    <td><?php echo $user['birthday']; ?></td>
                                    <td><?php echo $user['address']; ?></td>
                                    <td><?php echo $user['admin']; ?></td>
                                    
                                    <td align="center"><a href="edit.php?id=<?php echo $user['id']; ?>"><img width="16" src="../../images/icon_edit.png"></td>
                                    <td align="center"><a onclick="return confirm('Do you want to delete?')" href="delete.php?id=<?php echo $user['id']; ?>"><img width="16" src="../../images/icon_delete.png"></td>
                                </tr>
                            <?php       
                            }
                            ?>
                    </tbody>
                </table>	
                <button><a href="add.php">Add</a></button> 			
				<!-- /. ROW  -->
			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
    <?php include "../include/footer.php"; ?>
   
</body>
</html>
