<?php
session_start();
include('../config/config.php');
$user_id=$_SESSION['user']['user_id'];



if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $errors=array();
                        if (!isset($_POST['company'])) {
                            $errors[]='company';
                        }
                        else{
                            $company=$_POST['company'];             
                        }

                        if (!isset($_POST['position'])) {
                            $errors[]='position';
                        }
                        else{
                            $position=$_POST['position'];             
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

                        if (!isset($_POST['city'])) {
                            $errors[]='city';
                        }
                        else{
                            $city=$_POST['city'];
                        }

                        if (!isset($_POST['description'])) {
                            $errors[]='description';
                        }
                        else{
                            $description=$_POST['description'];
                        }


                        
                        if(empty($errors)) {
                            $query="INSERT INTO work(user_id, company, position, date_from,date_to, city, description)
                                            VALUES('{$user_id}','{$company}','{$position}','$date_from','$date_to','{$city}','{$description}')";
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