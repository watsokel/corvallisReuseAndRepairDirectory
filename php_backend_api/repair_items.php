<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header('Content-Type: application/json');
include 'dbp.php';

$mysqli = new mysqli('oniddb.cws.oregonstate.edu', 'watsokel-db', $dbpass, 'watsokel-db');

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!($stmt = $mysqli->prepare("SELECT DISTINCT i.name,i.url FROM item i
	INNER JOIN business_category_item bci ON bci.iid=i.id
	INNER JOIN category c ON c.id=bci.cid
	WHERE bci.bid != 86 AND c.name='Repair Items' ORDER BY i.name ASC" ))) {
	echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}

if(!$stmt->bind_result($repair_item_name, $repair_item_url)){
	echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqlii->connect_error;
}

$arr = array();
$i=0;

while($stmt->fetch()){
	//echo $repair_item_name;
	$obj = new stdClass();
  $obj->type = 'repairItem';
	$obj->name = $repair_item_name;
	$obj->url =  $repair_item_url;
	$arr[$i++] = $obj;
}

echo json_encode($arr);

$stmt->close();

?>
