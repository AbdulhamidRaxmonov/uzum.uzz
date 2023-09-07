<?php
	header("Content-Type:application/json");
    header('Access-Control-Allow-Origin', '*');
	header('Content-Type','application/json',);
	header( 'Access-Control-Allow-Headers', 'Content-Type',);
	include '../../connect.php';
	mysqli_set_charset($conn, 'utf8');
	$method = $_SERVER['REQUEST_METHOD'];
	$results = [];

	if ($method == 'GET') {
		$query = mysqli_query($conn, 'SELECT * FROM login');

		// $i = 1;
		if (mysqli_num_rows($query) > 0) {
			while($row = mysqli_fetch_assoc($query)) {
				$results['Status']['success'] = true;
				$results['Status']['code'] = 200;
				$results['Status']['description'] = 'Request Valid';
				$results['login'][] = [
					'id' => $row['id'],
					'name' => $row['name'],
					'surName' => $row['surName'],
					'phone' => $row['phone'],
					'create_at' => $row['create_at']
				];
				// $i = $i + 1;
			}
			//Menampilkan Data JSON dari Database

			// $data = ['Hasil' => $results];
			$json = json_encode($results);
			print_r($json);
		}
		else{
			$results['Status']['code'] = 400;
			$results['Status']['description'] = 'Request Invalid';
		}
	}else{
		$results['Status']['code'] = 404;
	}

	
?>

