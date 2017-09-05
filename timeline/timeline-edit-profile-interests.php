<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | My Interests</title>

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
                <li class="active"><i class="icon ion-ios-heart-outline"></i><a href="timeline-edit-profile-interests.php">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="timeline-edit-profile-settings.php">Account Settings</a></li>
                <li><i class="icon ion-ios-locked-outline"></i><a href="timeline-edit-profile-password.php">Change Password</a></li>
              </ul>
            </div>

            <div class="col-md-7">

              <!-- Edit Interests
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-heart-outline"></i>My Interests</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <ul class="list-inline interests">
                  	<li><a href=""><i class="icon ion-android-bicycle"></i> Bycicle</a></li>
                  	<li><a href=""><i class="icon ion-ios-camera"></i> Photgraphy</a></li>
                  	<li><a href=""><i class="icon ion-android-cart"></i> Shopping</a></li>
                  	<li><a href=""><i class="icon ion-android-plane"></i> Traveling</a></li>
                  	<li><a href=""><i class="icon ion-android-restaurant"></i> Eating</a></li>
                  </ul>
                  <div class="line"></div>
                  <div class="row">
                    <p class="custom-label"><strong>Add interests</strong></p>
                    <div class="form-group col-sm-8">
                      <input id="add-interest" class="form-control input-group-lg" type="text" name="interest" title="Choose Interest" placeholder="Interests. For example, photography"/>
                    </div>
                    <div class="form-group col-sm-4">
                      <button class="btn btn-primary">Add</button>
                    </div>
                  </div>
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
