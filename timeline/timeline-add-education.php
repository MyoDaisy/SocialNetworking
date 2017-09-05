<?php
session_start();
include('../config/config.php');
$user_id=$_SESSION['user']['user_id'];

if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $errors=array();
                        if (!isset($_POST['school'])) {
                            $errors[]='school';
                        }
                        else{
                            $school=$_POST['school'];             
                        }
                                 
                        if (!isset($_POST['date_from'])) {
                            $errors[]='date_from';
                        }
                        else{
                            $date_from=$_POST['date_from'];
                        }

                        if (!isset($_POST['date_to'])) {
                            $errors[]='date_to';
                        }
                        else{
                            $date_to=$_POST['date_to'];
                        }

                        if (!isset($_POST['description'])) {
                            $errors[]='description';
                        }
                        else{
                            $description=$_POST['description'];
                        }

                        if (!isset($_POST['graduated'])) {
                            $errors[]='graduated';
                        }
                        else{
                            $graduated=$_POST['graduated'];
                        }


                        
                        if(empty($errors)) {
                            $query="INSERT INTO education(user_id, school, date_from,date_to, description, graduated)
                                            VALUES('{$user_id}','{$school}','$date_from','$date_to', '{$description}','$graduated')";
                            $result=mysqli_query($dbc,$query);
                            if (mysqli_affected_rows($dbc)==1) {
                                
                                header("Location: timeline-edit-profile-work-edu.php");
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