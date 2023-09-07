<?php
$conn = mysqli_connect('localhost','root','root','news') or die('Xatolik bazada');
// Contact_info ADD
if(isset($_GET['btn'])){
  $contact_info = $_GET['contact_info'];
  $address = $_GET['address'];
  $email = $_GET['email'];
  $phone = $_GET['phone'];
  $insert = "INSERT INTO contact_info ( contact_info,address, email,phone) VALUES ('$contact_info','$address','$email','$phone')";
  $sqlInsert = mysqli_query($conn, $insert) or die(mysqli_error($conn));
  if($sqlInsert){
    header("location: ../contact_info_add.php");  
  }
  }
// Contact_info ADD END
//   Code Edit UPDATE
if(isset($_GET['edit'])){
  $id = $_GET['id'];
  $contact_info = $_GET['contact_info'];
  $address = $_GET['address'];
  $email= $_GET['email'];
  $phone= $_GET['phone'];
  $update = "UPDATE contact_info SET  `contact_info` = '$contact_info',`address` = '$address',`email` = '$email',`phone` = '$phone' WHERE `id` = '$id'";
  $sql_update = mysqli_query($conn,$update) or die(mysqli_error($conn));
  if($sql_update){
    header("location: ../contact_info_list.php");  
  }
}




//   Code Edit UPDATE END



// //   Code Edit view END








?>
