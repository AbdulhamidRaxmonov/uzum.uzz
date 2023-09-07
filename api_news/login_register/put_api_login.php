<?php
	header("Content-Type:application/json");
    include '../../connect.php';
	mysqli_set_charset($conn, 'utf8');
	$method = $_SERVER['REQUEST_METHOD'];
	$results = array();
	if ($method == 'PUT'){
		parse_str(file_get_contents('php://input'), $_PUT);
		$id = $_PUT['id'];
		$name = $_PUT['name'];
		$surName = $_PUT['surName'];
		$phone = $_PUT['phone'];
		$sql = "UPDATE login SET `name` = '$name', `surName` = '$surName',`phone`='$phone' WHERE `id` ='$id'";
		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($query){
            echo 'yozilmadi';
        }
		$results['Status']['success'] = true;
		$results['Status']['code'] = 200;
		$results['Status']['description'] = 'Data Succesfully Updated';
		$results['Hasil'] = array(
			'name' => $name,
			'surName' => $surName,
			'phone' => $phone,
		);						
	}
	else{
		$results['Status']['code'] = 405;
	}

	//Menampilkan Data JSON dari Database
	$json = json_encode($results);
	print_r($json);
?>