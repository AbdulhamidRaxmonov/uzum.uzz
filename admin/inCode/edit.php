<?php
$id =$_GET['id'];
$contactSql = "SELECT * FROM `contact_info` WHERE  id =$id";
$showContactEdit = mysqli_query($conn, $contactSql) or die(mysqli_error($conn)); 
$rowEdit = mysqli_fetch_assoc($showContactEdit);
$contact_info = $rowEdit['contact_info'];
$address = $rowEdit['address'];
$email = $rowEdit['email'];
$phone = $rowEdit['phone'];


?>