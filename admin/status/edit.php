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
						<h2>Edit</h2>
					</div>
				</div>
				<!-- /. ROW  -->
				<hr />
				<?php 
				include '../../config/config.php';



                    if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range'=>1)))
                    {
                        $id=$_GET['id'];
                    }
                    else
                    {
                        header('Location:index.php');
                        exit();//Neu no khong ton tai no se khong thuc hien tiep, va thoat ra
                    }
                    //Kiểm tra submit có tồn tại không
                    if ($_SERVER['REQUEST_METHOD']=='POST') {
                        
                        $errors=array();
                        if (empty($_POST['name'])) {
                            $errors[]='name';
                        }
                        else{
                            $name=$_POST['name'];             
                        }
                        
                        
                        if (empty($_POST['username'])) {
                            $errors[]='username';
                        }
                        else{
                            $username=$_POST['username'];               
                        }
                        
                        if (empty($_POST['password'])) {
                            $errors[]='password';
                        }
                        else{
                            $password=$_POST['password'];
                        }

                        if (empty($_POST['phone_number'])) {
                            $errors[]='phone_number';
                        }
                        else{
                            $phone_number=$_POST['phone_number'];
                        }

                        if (empty($_POST['email'])) {
                            $errors[]='email';
                        }
                        else{
                            $email=$_POST['email'];
                        }

                        if (empty($_POST['birthday'])) {
                            $errors[]='birthday';
                        }
                        else{
                            $birthday=$_POST['birthday'];
                        }

                        if($_FILES['uploadPicture']['name'] == NULL){
                            $errors[]='profile_picture';
                        }
                        else{
                            if($_FILES['uploadPicture']['type'] == "image/jepg" || $_FILES['uploadPicture']['type'] == "image/png" || $_FILES['uploadPicture']['type'] == "image/gif"){
                                $path = "../../images";
                                $tmp_name = $_FILES['uploadPicture']['tmp_name'];
                                $name = $_FILES['uploadPicture']['name'];
                                move_uploaded_file($tmp_name, $path.$name);
                                $profile_picture = $path.$name;
                            }
                        }

                        if (empty($_POST['address'])) {
                            $errors[]='address';
                        }
                        else{
                            $address=$_POST['address'];
                        }

                        if (!isset($_POST['admin'])) {
                            $errors[]='admin';
                        }
                        else{
                            $admin=$_POST['admin'];
                        }

                        
                        if(empty($errors)) {
                            $query="UPDATE user SET name='{$name}',
                                                        username='$username',
                                                        password='$password',
                                                        phone_number='$phone_number',
                                                        email='$email',
                                                        birthday=$birthday,
                                                        address='$address',
                                                        admin='$admin' WHERE id={$id}";
                            $result=mysqli_query($dbc,$query);
                            if (mysqli_affected_rows($dbc)==1) {
                                echo "<p style='color:green';>Edit Success</p";
                                header("Location: index.php");
                            }
                            else{
                                echo "<p>Edit Fail</p>";
                            }
                        }
                        else
                        {
                            $message="<p class='required'>Import all information</p>";
                        }   
                    }
                    

                    $query_id="SELECT name,username,password,phone_number,email, birthday,address,admin FROM user WHERE id={$id}
                    ";  
                    $result_id=mysqli_query($dbc,$query_id);
                    //Kiểm tra xem id có tồn tại hay không
                    if(mysqli_num_rows($result_id)==1) {
                        list($name,$username,$password,$phone_number,$email,$birthday,$address,$admin)=mysqli_fetch_array($result_id,MYSQLI_NUM);

                    }
                    else
                    {
                        $message="<p class='required'>Don't have this id</p>";
                    }
                ?>
                    <form name="frmadd_user" method="POST" enctype="multipart/form-data">
                        <?php 
                            if (isset($message)) {
                                echo $message;
                            }
                        ?>


                            
                            
                        <h3>Edit <?php if(isset($username)) {echo $username;} ?></h3>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php if(isset($username)){echo $username;} ?>" class="form-control" placeholder="Username">
                                <?php 
                                    if (isset($errors) && in_array('username',$errors)) {
                                        echo "<p class='required'>Import Username</p>";
                                    }
                                ?>
                            </div>


                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?php if(isset($password)){echo $password;} ?>" class="form-control" placeholder="Password">
                                <?php 
                                    if (isset($errors) && in_array('password',$errors)) {
                                        echo "<p class='required'>Import Password</p>";
                                    }
                                ?>
                            </div>


                           <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="<?php if(isset($name)){echo $name;} ?>" class="form-control" placeholder="Name">
                                <?php 
                                    if (isset($errors) && in_array('name',$errors)) {
                                        echo "<p class='required'>Import name</p>";
                                    }
                                ?>
                            </div>


                       
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone_number" value="<?php if(isset($phone_number)){echo $phone_number;} ?>" class="form-control" placeholder="Phone Number">
                                <?php 
                                    if (isset($errors) && in_array('phone_number',$errors)) {
                                        echo "<p class='required'>Import Phone Number</p>";
                                    }
                                ?>
                            </div>

                     
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php if(isset($email)){echo $email;} ?>" class="form-control" placeholder="Email">
                                <?php 
                                    if (isset($errors) && in_array('email',$errors)) {
                                        echo "<p class='required'>Import Email</p>";
                                    }
                                ?>
                            </div>

                      
                            <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" name="uploadPicture">
                                 <?php 
                                    if (isset($errors) && in_array('email',$errors)) {
                                        echo "<p class='required'>Import Email</p>";
                                    }
                                ?>
                            </div>
                            
                       
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" name="birthday" value="<?php if(isset($birthday)){echo $birthday;} ?>" class="form-control" placeholder="Birthday">
                                <?php 
                                    if (isset($errors) && in_array('birthday',$errors)) {
                                        echo "<p class='required'>Import Birthday</p>";
                                    }
                                ?>
                            </div>

                        
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="<?php if(isset($address)){echo $address;} ?>" class="form-control" placeholder="Address">
                                <?php 
                                    if (isset($errors) && in_array('address',$errors)) {
                                        echo "<p class='required'>Import Address</p>";
                                    }
                                ?>
                            </div>

                            <div class="form-group">
                                <label style="display: block;">Admin</label>
                                <?php 
                                    if($admin==1)
                                    {
                                ?>
                                        <label class="radio-inline"><input type="radio" checked="checked" name="admin" value="1">True</label>
                                        <label class="radio-inline"><input type="radio" name="admin" value="0">False</label>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                        <label class="radio-inline"><input type="radio"  name="admin" value="1">True</label>
                                        <label class="radio-inline"><input type="radio" checked="checked" name="admin" value="0">False</label>
                                <?php
                                    }
                                ?>
                             </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                        </form>

                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


<?php include "../include/footer.php"; ?>
   
</body>
</html>
