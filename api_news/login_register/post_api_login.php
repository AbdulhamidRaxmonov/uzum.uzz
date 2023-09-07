<?php                    
    header("Content-Type:application/json");
    include '../../connect.php';
	  mysqli_set_charset($conn, 'utf8');
	  $method = $_SERVER['REQUEST_METHOD'];
   	$results = array();
    if ($method == 'POST'){
      $name = $_GET['name'];
      $surName = $_GET['surName'];
      $phone = $_GET['phone'];
      $insert = "INSERT INTO login (name, surName, phone) values('{$name}', '{$surName}','{$phone}')";
      $query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
      if($query){
        //       header("location: login_kod.php");  
      }  
      $results['Status']['success'] = true;
      $results['Status']['code'] = 200;
      $results['Status']['description'] = 'Request Valid';
      $results['login'] = array(
      'name' => $name,
      'surName' => $surName,
      'phone' => $phone
       );			
      }
      else{
      $results['Status']['code'] = 400;
      }
      //Menampilkan Data JSON dari Database
      $json = json_encode($results);
      print_r($json);
?>