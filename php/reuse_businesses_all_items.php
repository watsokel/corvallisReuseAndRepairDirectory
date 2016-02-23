<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: application/json');
include 'dbp.php';

$arr = array();

$mysqli = new mysqli('oniddb.cws.oregonstate.edu', 'watsokel-db', $dbpass, 'watsokel-db');

if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqlii
->connect_error;
}

if (!$mysqli->set_charset("utf8")) {
	$obj->http_response_code = 400;
	$obj->error_description = 'Error loading character set utf8.';
	echo json_encode($obj);
	return;
}


if($_SERVER['REQUEST_METHOD']==='GET'){	//Retrieve repair businesseses
  if (!($stmt = $mysqli->prepare("SELECT DISTINCT b.name, b.street, b.city, b.state, b.zipcode, b.phone, b.hours, b.website, b.latitude, b.longitude, b.info FROM business b
    INNER JOIN business_category_item bci ON bci.bid=b.id
    INNER JOIN item i ON i.id=bci.iid
    WHERE b.type='Reuse' ORDER BY b.name ASC"))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
  }

  if (!$stmt->execute()) {
    $obj->http_response_code = 400;
    $obj->error_description = 'Execute failed.';
    echo json_encode($obj);
  }

  if(!$stmt->bind_result($bN,$bStr,$bC,$bSta,$bZ,$bP,$bH,$bW,$bLat,$bLng,$bI)){
    $obj->http_response_code = 400;
    $obj->error_description = 'Bind result failed.';
    echo json_encode($obj);
  }

  $i=0;

  while($stmt->fetch()){
    if($bN=='generic_reuse_business'){
      continue;
    }
    $obj = new stdClass();
    $obj->type = 'reuseBusiness';
    $obj->name = $bN;
    $obj->street = $bStr;
    $obj->city = $bC;
    $obj->state = $bSta;
    $obj->zip = $bZ;
    $obj->phone = $bP;
    $obj->hours = $bH;
    $obj->website = $bW;
    $obj->lat = $bLat;
    $obj->lng = $bLng;
    $obj->info = $bI;
    $arr[$i++] = $obj;
  }
  if(!empty($arr)){
    echo json_encode($arr);
  } else{
    $obj = new stdClass();
    $obj->http_response_code = 400;
    $obj->error_description = "No reuse businesses retrieved.";
    echo json_encode($obj);
  }
  $stmt->close();
}
?>
