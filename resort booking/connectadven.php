<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $checkin = $_POST['checkin'];
  $package = $_POST['package'];
  $adults = $_POST['adults'];
  $kids = $_POST['kids'];
  
  $db = mysqli_connect('localhost','root','','resort booking');
  if($db->connect_error){
      die('Connection Failed:'.$db->connect_error);
  }else{
      $sql = "INSERT INTO adventure (name, email, phone, checkin, package, adults, kids)
      VALUES('$name', '$email', '$phone','$checkin','$package','$adults','$kids')";
     mysqli_query($db, $sql);
     $_SESSION['fullname'] = $fullname;
     $_SESSION['success'] = "Your message is sent..";
     header('location: index.php'); //redirecting to home page            

  }
  ?>