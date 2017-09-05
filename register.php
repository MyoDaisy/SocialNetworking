<?php

include('config/config.php');

if ($_SERVER['REQUEST_METHOD']=='POST') {
                        $errors=array();
                        if (!isset($_POST['first_name'])) {
                            $errors[]='first_name';
                        }
                        else{
                            $first_name=$_POST['first_name'];             
                        }
                        
                        
                        if (!isset($_POST['last_name'])) {
                            $errors[]='last_name';
                        }
                        else{
                            $last_name=$_POST['last_name'];               
                        }
                        
                        if (!isset($_POST['email'])) {
                            $errors[]='email';
                        }
                        else{
                            $email=$_POST['email'];
                        }

                        if (!isset($_POST['password'])) {
                            $errors[]='password';
                        }
                        else{
                            $password=$_POST['password'];
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
                            $birthday = $day."-".$month."-".$year;
                        }

                        if (!isset($_POST['male'])) {
                            $errors[]='male';
                        }
                        else{
                            $male=$_POST['male'];
                        }

                        if(!isset($_POST['city'])) {
                            $errors[]='city';
                        }
                        else{
                            $city=$_POST['city'];
                        }

                        if (!isset($_POST['country'])) {
                            $errors[]='country';
                        }
                        else{
                            $country=$_POST['country'];
                        }
                        
                        if(empty($errors)) {
                            $query="INSERT INTO user(first_name,last_name,email,password,birthday,male,city,country)
                                            VALUES('$first_name','$last_name','$email','$password','$birthday','$male','$city','$country')";
                            $result=mysqli_query($dbc,$query);
                            if (mysqli_affected_rows($dbc)==1) {
                                header("Location: index-register.php");
                            }
                            else{
                                echo "<p>Creat Fail</p>";
                            }
                        }
                        else
                        {   
                            $message="<p>Enter all information</p>";
                            echo $message;
                        }   
                    }

?>