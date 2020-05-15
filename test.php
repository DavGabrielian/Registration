<?php

session_start();


$fname = $lname = $email  = $password = $cpassword = "";
$fnameErr = $lnameErr = $emailErr = $passwordErr = $cpasswordErr  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["fname"])) {
         $_SESSION['error']['fnameErr'] = 'First name is required';
    } else {
         $_SESSION['fname'] = $_POST["fname"];
    }
    if(empty($_POST["lname"])) {
         $_SESSION['error']['lnameErr'] = "Last name is required";
    } else {
        $_SESSION['lname'] = $_POST["lname"];
    }
    if(empty($_POST["email"])) {
         $_SESSION['error']['emailErr'] =  "Email is required";
    } else {
        $_SESSION['email'] = $_POST["email"];
    }
    if ($_POST["password"] !== $_POST["cpassword"]){
         $_SESSION['error']['cpasswordErr'] = "Passwords didn't match";
        } else {
            $_SESSION['cpassword'] = 'Strong Password';
    }
}




if(empty($_SESSION['error']))
{
    $f_name = $_POST["fname"];
    $l_name = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $link = mysqli_connect('localhost', 'root','','mydatabase');

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $sqlPost = mysqli_query($link, "INSERT INTO users (f_name, l_name, email, `password`) 
    VALUES ('$f_name',  '$l_name', '$email', MD5('$password'))");

    if($sqlPost) {
        header("Location: done.php");
    } else {
        //insert problem
        header("Location: ./");

    }

} else {
     
    header("Location: index.php");
    
}






//?error=.$loginErr.$emailErr.$telErr.$passwordErr.$cpasswordErr"
// header("Location: index.php?success=.$login.$email.$tel.$password.$cpassword");
// function output() {

//      exit.
// }

