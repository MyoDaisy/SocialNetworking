<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | Change My Password</title>

    <?php
      include('../include/header.php');
    ?>

    <div class="container">

      <?php
        include('include/timeline-menu.php');
      ?>

        </div>
        <div id="page-contents">
          <div class="row">
            
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
                <li><i class="icon ion-ios-information-outline"></i><a href="timeline-edit-profile-basic.php">Basic Information</a></li>
                <li><i class="icon ion-ios-briefcase-outline"></i><a href="timeline-edit-profile-work-edu.php">Education and Work</a></li>
                <li><i class="icon ion-ios-heart-outline"></i><a href="timeline-edit-profile-interests.php">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="timeline-edit-profile-settings.php">Account Settings</a></li>
                <li class="active"><i class="icon ion-ios-locked-outline"></i><a href="timeline-edit-profile-password.php">Change Password</a></li>
              </ul>
            </div>

            <div class="col-md-7">

              <!-- Change Password
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                </div>
                <div class="edit-block">
                  <form name="update-pass" id="education" method="POST" action="timeline-update-password.php" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="old_password">Old password</label>
                        <input id="old_password" class="form-control input-group-lg" type="password" name="old_password" title="Enter password" placeholder="Old password"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>New password</label>
                        <input class="form-control input-group-lg" type="password" name="new_password" title="Enter password" placeholder="New password"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Confirm password</label>
                        <input class="form-control input-group-lg" type="password" name="confirm_password" title="Enter password" placeholder="Confirm password"/>
                      </div>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <input type="submit" name="update-password" class="btn btn-primary" value="Save Changes" />
                  </form>
                </div>
              </div>
            </div>
            
              
            <?php
              include('include/side-bar-right.php');
            ?>
            
          </div>
        </div>
      </div>
    </div>


    <?php
      include('../include/footer.php');
    ?>
