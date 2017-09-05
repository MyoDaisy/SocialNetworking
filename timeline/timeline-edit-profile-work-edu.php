<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Edit Profile | Work and Education</title>

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
                <li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="timeline-edit-profile-work-edu.php">Education and Work</a></li>
                <li><i class="icon ion-ios-heart-outline"></i><a href="timeline-edit-profile-interests.php">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="timeline-edit-profile-settings.php">Account Settings</a></li>
                <li><i class="icon ion-ios-locked-outline"></i><a href="timeline-edit-profile-password.php">Change Password</a></li>
              </ul>
            </div>

            <div class="col-md-7">

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>Add my education</h4>
                  
                </div>
                <div class="edit-block">
                  <form name="education" method="POST" action="timeline-add-education.php" id="education" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="school">My school</label>
                        <input id="school" class="form-control input-group-lg" type="text" name="school" title="Enter School" placeholder="My School"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date_from">From</label>
                        <input id="date_from" class="form-control input-group-lg" type="text" name="date_from" title="Enter a Date" placeholder="from"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date_to" class="">To</label>
                        <input id="date_to" class="form-control input-group-lg" type="text" name="date_to" title="Enter a Date" placeholder="to"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="edu-description">Description</label>
                        <textarea id="edu-description" name="description" class="form-control" placeholder="Some texts about my education" rows="4" cols="400"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="graduated">Graduated?  </label>
                        <input id="graduated" type="radio" name="graduated" value="1" checked> Yes
                        <input id="graduated" type="radio" name="graduated" value="0"> No
                      </div>
                    </div>
                    <input type="submit" name="add_education" class="btn btn-primary" value="Add" />
                  </form>
                </div>
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-briefcase-outline"></i>Add Work Experiences</h4>
                </div>
                <div class="edit-block">
                  <form name="work" id="work" method="POST" action="timeline-add-work.php" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="company">Company</label>
                        <input id="company" class="form-control input-group-lg" type="text" name="company" title="Enter Company" placeholder="Company name"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="position">Position</label>
                        <input id="position" class="form-control input-group-lg" type="text" name="position" title="Enter position" placeholder="position"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date_from">From</label>
                        <input id="date_from" class="form-control input-group-lg" type="text" name="date_from" title="Enter a Date" placeholder="from"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date_to" class="">To</label>
                        <input id="date_to" class="form-control input-group-lg" type="text" name="date_to" title="Enter a Date" placeholder="to"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="city">City/Town</label>
                        <input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="city"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Some texts about my work" rows="4" cols="400"></textarea>
                      </div>
                    </div>
                    <input type="submit" name="add_work" class="btn btn-primary" value="Add" />
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
