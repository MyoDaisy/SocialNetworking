<?php
session_start();
include('../config/config.php');
$user_id=$_SESSION['user']['user_id'];

if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $errors=array();
                        if (!isset($_POST['content'])) {
                            $errors[]='content';
                        }
                        else{
                            $content=$_POST['content'];             
                        }
                                 
                        $time_stamp=date('y-m-d');
                        
                        if(empty($errors)) {
                            $query="INSERT INTO status(user_id, content, time_stamp)
                                            VALUES('{$user_id}','{$content}','$time_stamp')";
                            $result=mysqli_query($dbc,$query);
                            echo $query;
                            if (mysqli_affected_rows($dbc)==1) {
                                
                                header("Location: timeline.php");
                            }
                            else{
                                echo "<p>Add Fail</p>";
                            }
                        }
                        else
                        {   
                            $message="<p>Enter all information</p>";
                            echo $message;
                        }   
                    }

?>