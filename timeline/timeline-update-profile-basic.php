<?php
session_start();
include('../config/config.php');
$user_id=$_SESSION['user']['user_id'];

if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $errors=array();
                        if (!isset($_POST['first_name'])) {
                            $errors[]='first_name';
                        }
                        else{
                            $new_first_name=$_POST['first_name'];             
                        }
                        
                        
                        if (!isset($_POST['last_name'])) {
                            $errors[]='last_name';
                        }
                        else{
                            $new_last_name=$_POST['last_name'];               
                        }
                        
                        if (!isset($_POST['email'])) {
                            $errors[]='email';
                        }
                        else{
                            $new_email=$_POST['email'];
                        }

                        if (!isset($_POST['day'])) {
                            $errors[]='day';
                        }
                        else{
                            $day=$_POST['day'];
                        }

                        if (!isset($_POST['month'])) {
                            $errors[]='month';
                        }
                        else{
                            $month=$_POST['month'];
                        }

                        if (!isset($_POST['year'])) {
                            $errors[]='year';
                        }
                        else{
                            $year=$_POST['year'];
                        }

                        if(isset($year) && isset($month) && isset($day)){
                            $new_birthday = $year."-".$month."-".$day;
                        }

                        if (!isset($_POST['male'])) {
                            $errors[]='male';
                        }
                        else{
                            $new_male=$_POST['male'];
                        }

                        if(!isset($_POST['city'])) {
                            $errors[]='city';
                        }
                        else{
                            $new_city=$_POST['city'];
                        }

                        if (!isset($_POST['country'])) {
                            $errors[]='country';
                        }
                        else{
                            $new_country=$_POST['country'];
                        }

                        if (!isset($_POST['description'])) {
                            $errors[]='description';
                        }
                        else{
                            $new_description=$_POST['description'];
                        }

                        
                        if(empty($errors)) {
                            $query="UPDATE user SET first_name='$new_first_name',
                                                    last_name='$new_last_name',
                                                    email='$new_email',
                                                    birthday='$new_birthday',
                                                    email='$new_email',
                                                    male='$new_male',
                                                    city='$new_city',
                                                    country='$new_country',
                                                    description='$new_description' WHERE user_id={$user_id}";
                            $result=mysqli_query($dbc,$query);
                            if (mysqli_affected_rows($dbc)==1) {
                                header("Location: timeline-edit-profile-basic.php");
                            }
                            else{
                                echo "<p>Edit Fail</p>";
                            }
                        }
                        else
                        {   
                            $message="<p>Enter all information</p>";
                            echo $message;
                            header("Location: timeline-edit-profile-basic.php");
                        }   
                    }

?>