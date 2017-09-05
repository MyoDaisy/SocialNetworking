<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>About Me | Learn Detail About Me</title>

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
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- About
              ================================================= -->
              <div class="about-profile">
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>

                  <div class="row">
                    <div class="col-xs-3"><span class="text-red">Email: </span></div>
                    <div class="col-xs-5"><center><?php echo $email?></center></div>
                  </div>

                  <div class="row">
                    <div class="col-xs-3"><span class="text-red">Gender: </span></div>
                    <div class="col-xs-5">
                    <center>
                      <?php
                        if($male==1){
                          echo "Male";
                        }
                        else{
                          echo "Female";
                        } 
                      ?>
                    </div>
                    </center>
                  </div>

                  <div class="row">
                    <div class="col-xs-3"><span class="text-red">Birthday: </span></div>
                    <div class="col-xs-5"><center><?php echo $birthday?></center></div>
                  </div>


                  <div class="row">
                    <div class="col-xs-3"><span class="text-red">Description: </span></div>
                    <div class="col-xs-5"><center><?php echo $description?></center></div>
                  </div>           
          
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Work Experiences</h4>

                  <?php
                    $work=getWorkFromUserId($user_id);
                    foreach ($work as $key => $onework) { ?>

                      <div class="organization">
                      <img src="../images/envato.png" alt="" class="pull-left img-org" />
                      <div class="work-info">
                        <h5><?php echo $onework['company']?></h5>
                        <p><span class="text-grey"><?php echo $onework['date_from']." to ". $onework['date_to'] ?></span></p>
                      </div>
                    </div>
                  <?php
                    }
                  ?>
                  

                    
                  
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                  <p>228 Park Eve, New York</p>
                  <div class="google-maps">
                    <div id="map" class="map"></div>
                  </div>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>Interests</h4>
                  <ul class="interests list-inline">
                    <li><span class="int-icons" title="Bycycle riding"><i class="icon ion-android-bicycle"></i></span></li>
                    <li><span class="int-icons" title="Photography"><i class="icon ion-ios-camera"></i></span></li>
                    <li><span class="int-icons" title="Shopping"><i class="icon ion-android-cart"></i></span></li>
                    <li><span class="int-icons" title="Traveling"><i class="icon ion-android-plane"></i></span></li>
                    <li><span class="int-icons" title="Eating"><i class="icon ion-android-restaurant"></i></span></li>
                  </ul>
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
