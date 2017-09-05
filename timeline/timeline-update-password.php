<?php
session_start();
include('../config/config.php');
$user_id=$_SESSION['user']['user_id'];
$password=$_SESSION['user']['password'];

if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $errors=array();
                        if (!isset($_POST['old_password'])) {
                            $errors[]='old_password';
                        }
                        else{
                            $old_password=$_POST['old_password'];             
                        }
                        
                        
                        if (!isset($_POST['new_password'])) {
                            $errors[]='new_password';
                        }
                        else{
                            $new_password=$_POST['new_password'];               
                        }
                        
                        if (!isset($_POST['confirm_password'])) {
                            $errors[]='confirm_password';
                        }
                        else{
                            $confirm_password=$_POST['confirm_password'];
                        }
                  
                        if(empty($errors)) {
                            if($new_password == $confirm_password){
                                if($password == $old_password){
                                    $query="UPDATE user SET password='{$new_password}' WHERE id={$user_id}";
                                    $result=mysqli_query($dbc,$query);
                                    if (mysqli_affected_rows($dbc)==1) {
                                        header("Location: timeline-edit-profile-password.php");
                                    }
                                    else{
                                        echo "<p>Edit fail</p>";
                                    }
                               
                                }
                                    
                                else{
                                    echo "Your password is incorrect";
                                    header("Location: timeline-edit-profile-password.php");
                                }
                            }
                            else{
                                echo "You must enter the same password twice in order to confirm it.";
                                header("Location: timeline-edit-profile-password.php");
                            }
                        }
                        else
                        {   
                            $message="<p>Enter all information</p>";
                            echo $message;
                            header("Location: timeline-edit-profile-password.php");
                        }   
                    }

?>