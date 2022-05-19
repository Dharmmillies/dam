<?php

  require_once "connect.php";



$fn=strip_tags(@$_POST['fname']);
$un=strip_tags(@$_POST['username']);
$em=strip_tags(@$_POST['email']);
$em2=strip_tags(@$_POST['confemail']);
$pwd=strip_tags(@$_POST['password']);
$pwd2=strip_tags(@$_POST['conpassword']);
$date=date("y-m-d");


if(isset($_POST['reg'])){


   if (empty($fn) || empty($un) || empty($em) || empty($em2) || empty($pwd) || empty($pwd2))  {
    // code...
    header("Location: ../index.php?error=enterallfields");
    exit();
  
  }
   elseif (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
    // code...
     header("Location: ../index.php?error=enteracorrectemail");
    exit();
  }

  elseif ($em !== $em2 ) {
    // code...
    header("Location: ../index.php?error=emailsdoesnotmatch");
    exit();

  }


  //checking if userNAME alrady exist || EMAIL EXIST
  $sql = "SELECT * FROM users WHERE username ='$un' || email ='$em'; ";
  $checkExist = mysqli_query($conn, $sql);
  //count the no of row where if exists
   $checkrow = mysqli_num_rows($checkExist);
  if($checkrow > 0) {
 // code...
    header("Location: ../index.php?error=usernameoremailalreadyexist");
    exit();
  }
  elseif (strlen($pwd)<5) {

    // code...
    header("Location: ../index.php?error=passwordislessthan5");
    exit();
    
  }
  elseif ($pwd !== $pwd2) {
    // code...
    header("Location: ../index.php?error=passworddoesnotmatch");
    exit();
  }
  
  else{
      $pwdHash = md5($pwd);
      $pwdHash2=md5($pwd2);
    mysqli_query($conn, "INSERT INTO users(id, fullname, username, email, password, dateofsignup, activated) VALUES('', '$fn','$un', '$em','$pwdHash','$date', '1')") or die(mysqli_connect_error()) ;
     

      header("Location: ../index.php?error=sucessful");
      exit();
     
      mysqli_close();
  }

  




}//end of reg