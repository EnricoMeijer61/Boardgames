<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
require 'views/users.view.php';
//if (isset($_POST['reg_user'])) {
//    $fname = $_POST['fname'];
//    $lname = $_POST['lname'];
//    $email = $_POST['email'];
//    $mobile = $_POST['mobile'];
//    $password_1 = $_POST['password_1'];
//    $password_2 = $_POST['password_2'];
//
//    if ($password_1 != $password_2) {
//        array_push($errors, "The two passwords do not match");
//    }
//    if (count($errors) == 0) {
//        $password = $password_1;
//        $password = hash("sha256",$password);
//        $query = $conn->prepare("INSERT INTO users (fname, lname, email, mobile, password)
//                                            VALUES ('$fname, $lname, $email, $mobile, $password)");
//        $query->execute();
//    }
//}