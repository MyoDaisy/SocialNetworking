<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>My Timeline | This is My Coolest Profile</title>

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

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <form method="POST" action="timeline-add-status.php">
                  <div class="row">
                    <div class="col-md-7 col-sm-7">
                      <div class="form-group">
                        <img src=<?php echo $profile_photo ?> alt="" class="profile-photo-md" />
                          <textarea name="content" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                      </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                      <div class="tools">
                        <ul class="publishing-tools list-inline">
                          <li><a href="#"><i class="ion-compose"></i></a></li>
                          <li><a href="#"><i class="ion-images"></i></a></li>
                          <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                          <li><a href="#"><i class="ion-map"></i></a></li>
                        </ul>
                        <input type="submit" name="submit-post" class="btn btn-primary pull-right" value="Publish" />
                      </div>
                    </div>
                  </div>
                </form>
              </div><!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
              <?php 
                $status = getStatusFromUserId($user_id);
                foreach ($status as $key => $oneStatus) {
              ?>

                  <div class="post-content">

                    <!--Post Date-->
                    <div class="post-date hidden-xs hidden-sm">
                      <h5><?php echo "$first_name $last_name"?></h5>
                      <p class="text-grey"><?php echo $oneStatus['time_stamp']?></p>
                    </div><!--Post Date End-->
                    <?php
                      if($oneStatus['photo']){
                    ?>
                        <img src=<?php echo $oneStatus['photo']?> alt="post-image" class="img-responsive post-image" />
                    <?php 
                      }
                    ?>
                    
                    <div class="post-container">
                      <img src=<?php echo $profile_photo?> alt="user" class="profile-photo-md pull-left" />
                      <div class="post-detail">
                        <div class="user-info">
                          <h5><a href="timeline.php" class="profile-link"><?php echo "$first_name $last_name"?></a></h5>
                          <p class="text-muted">Published in <?php echo $oneStatus['time_stamp']?></p>
                        </div>
                        <div class="reaction">
                          <a class="btn text-green"><i class="icon ion-thumbsup"></i></a><?php echo $oneStatus['like_number']?>
                          <a class="btn text-red"><i class="fa fa-thumbs-down"></i></a><?php echo $oneStatus['dislike_number']?>
                        </div>
                        <div class="line-divider"></div>
                        <?php 
                          if($oneStatus['content']){
                        ?>
                            <div class="post-text">
                              <p><?php echo $oneStatus['content']?></p>
                            </div>
                        <?php
                          }
                        ?>
                           <div class="line-divider"></div>
                        <?php 
                          $comment = getCommentFromStatusId($oneStatus['status_id']);
                          foreach ($comment as $key => $oneComment) {
                            $userCommentId = $oneComment['user_id'];
                            $userComment = getUserFromUserId($userCommentId);
                        ?>

                           
                            <div class="post-comment">
                              <img src=<?php echo $userComment['profile_photo']?> alt="" class="profile-photo-sm" />
                              <p><a href="timeline.php" class="profile-link"><?php echo "$first_name $last_name"?> </a><i class="em em-laughing"></i><?php echo $oneComment['content']?></p>
                            </div>
                           

                        <?php 
                          }
                        ?>
                            <div class="post-comment">
                              <img src=<?php echo $profile_photo?> alt="" class="profile-photo-sm" />
                              <input type="text" class="form-control" placeholder="Post a comment">
                            </div>
                          </div>
                          
                    </div>
                  </div>




              <?php
                }
              ?>

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
