<?php
session_start();
include "connect.php";
$erroremail = "";
$emptymsg1 = "";
$emptymsg2 = "";
$emptymsg3 = "";
$emptymsg4 = "";
$emptymsg5 = "";
$success = "" ;
$invalid = "";
$fname = "";
$email = "";
$title = "";
$Ingredient = "";
$password = "";


if (isset($_POST["submit"])) {
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $Ingredient = $_POST['ingredient'];
  $title = $_POST['title'];
  $password = $_POST['password'];
  // $cpassword = $_POST['cpassword'];
  $picture = $_FILES['picture']['name'];
  $tmp_picture = $_FILES['picture']['tmp_name'];



  if ($fname == "") {
    $emptymsg1 = "Full name can't be empty";
  } else if ($email == "") {
    $emptymsg2 = "Email field can't be empty";
  } else if ($Ingredient == "") {
    $emptymsg3 = "Atleast one ingredient is needed";
  }else if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$Ingredient)){
    $emptymsg3 = "Ingredient must be a comma separated list";
  }else if ($title == "") {
    $emptymsg4 = "Give your pizza a title";
  } else if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
    $emptymsg4 = "Titles must be letter and spaces only";
  }else if ($password == "") {
    $emptymsg5 = "Password field is required";
  } else {
    if (isset($email)) {
      $select = mysqli_query($conn, "SELECT * FROM `pizzadetails` WHERE `email` = '$email'");
      $result = mysqli_num_rows($select);
      if ($result > 0) {
        $erroremail = "Email already exists";
      } else {
        $insert = mysqli_query($conn, "INSERT INTO `pizzadetails`(`fname`, `email`, `ingredient`, `title`, `picture`, `Password`) VALUES ('$fname','$email','$Ingredient','$title','$picture','$password')");
        move_uploaded_file($tmp_picture, "upload/$picture");

       $success = "Account Successfully Created";
       if($success){
        $fname = "";
        $email = "";
        $Ingredient = "";
        $title = "";
        $password = "";
        $picture = "";
       }
      }
    }
  }
}




if (isset($_POST["submit2"])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(($email && $password) == ""){
    $invalid = "Invalid email or password";
  }

  $select2 = mysqli_query($conn, "SELECT * FROM `pizzadetails` WHERE `email` = '$email' AND `password` = '$password'");
 
  if(mysqli_num_rows($select2) > 0){
    $user = mysqli_fetch_assoc($select2);
    $_SESSION["email"] = $user["email"];
    $_SESSION["password"] = $user["password"];

    echo '<h2 style= "color: green">Succesfully login</h2>';
    header("location: index.php");
}
}