<?
    header("Content-Type:application/json");
    include '../connect.php';
	  mysqli_set_charset($conn, 'utf8');

	  $method = $_SERVER['REQUEST_METHOD'];
   	$results = array();
  
    // echo $_POST["name"];
    if ($method == 'POST'){
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
     
   
      $insert = "INSERT INTO contact (name, email, subject, message) values('{$name}', '{$email}', '{$subject}', '{$message}')";
      
      $query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
      if($query){
        echo "Bazaga yozildi.";
      }


    
      $results['Status']['success'] = true;
      $results['Status']['code'] = 200;
      $results['Status']['description'] = 'Request Valid';
      $results['Users'] = array(
      'name' => $name,
      'email' => $email,
      'subject' => $subject,
      'message' => $message
       );			
      }
      else{
      $results['Status']['code'] = 400;
      }
      
      //Menampilkan Data JSON dari Database
      $json = json_encode($results);
      print_r($json);
?>	