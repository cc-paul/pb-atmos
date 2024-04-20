<?php
	if(!isset($_SESSION)) { session_start(); } 
	include 'conn.php';

	$json_url       = "https://api.openweathermap.org/data/2.5/group?id=1697473,1697808,1731818,1723105,1679430,1707667,1708130,1691440,1694234,1694365&units=metric&appid=f88bb901cd2915e2d9b8e9c78123c46e&units=metric";
	$json           = file_get_contents($json_url);
	$data           = json_decode($json, TRUE);
	$response       = array();
	$result         = array(); 
	$arrLabelPlaces = array('Nueva Ecija','Negros Occidental','Agusan Del Sur','Bukidnon','Zamboanga','Lanao Del Sur','Ifugao','Capiz','Leyte','Iloilo');
	$count          = 0;
	$arrQuery       = array();

	foreach($data['list'] as $data) {
		$description;
		$icon;
		$temp          = json_encode($data["main"]["temp"]) + rand(1,5);
		$isLPA         = false;
		$displayToUser = $arrLabelPlaces[$count];
		$temp          = array();

		if ($data["main"]["pressure"] < 1015) {
			$isLPA = true;
		}

		foreach ($data['weather'] as $value) {
			$description = $value["description"];
			$icon = $value["icon"];
		}

		array_push($arrQuery, "('".$data['id']."','". (json_encode($data["main"]["temp"]) + rand(1,5)) ."','".$global_date."','$description')");

		$count++;

		$temp["id"]            = $data['id'];
		$temp["displayToUser"] = $displayToUser;
		$temp["name"]          = $data['name'];
	   	$temp["description"]   = $description;
		$temp["icon"]          = "http://openweathermap.org/img/wn/".$icon."@2x.png?random=".rand();
	   	$temp["temp"]          = $data["main"]["temp"] + rand(1,5)."°C";
	   	$temp["pressure"]      = $data["main"]["pressure"];
	   	$temp["isLPA"]         = $isLPA;
	   	array_push($result, $temp);  
	}

	$sql = "INSERT INTO b_temp_report (cityId,temp,dateCreated,description) VALUES " . join(",",$arrQuery);
	mysqli_query($con, $sql);

	echo json_encode($result);
?>