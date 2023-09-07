<?php
include '../../connect.php';
$id = $_GET['id'];  
$contactDeleteInfo = "DELETE  FROM contact_info WHERE id = $id";
$sqlDelContact_info = mysqli_query($conn,$contactDeleteInfo) or die(mysqli_error($conn));
if($sqlDelContact_info){
  header("location: ../contact_info_list.php");  
}

?>