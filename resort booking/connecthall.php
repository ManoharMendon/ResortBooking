<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $a_date = $_POST['a_date'];
  $timeat = $_POST['timeat'];
  $people = $_POST['people'];
  $hall = $_POST['hall'];

  
  $db = mysqli_connect('localhost','root','','resort booking');
  if($db->connect_error){
      die('Connection Failed:'.$db->connect_error);
  }else{
      $sql = "INSERT INTO hall_reservation(name, email, phone, a_date, timeat, people, hall)
      VALUES('$name', '$email', '$phone', '$a_date', '$timeat', '$people', '$hall')";
     mysqli_query($db, $sql);
     $_SESSION['name'] = $name;
     $_SESSION['success'] = "Your message is sent..";
     echo"<script><h1>your hall is been booked</h1></script>";
     header('location: index.php'); //redirecting to home page            

  }
  ?>