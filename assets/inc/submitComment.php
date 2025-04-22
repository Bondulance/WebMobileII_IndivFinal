
<?php
include('./tools.inc.php');
require_once('./dbConn.php');
header('Content-Type: application/json');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL";
    exit();
}

// this will be my prepare statement, can no longer have sql injuections or what not
$prepareStatement = $mysqli->prepare("INSERT INTO Comments (`Name`, `Message`) VALUES (?, ?)");
$prepareStatement->bind_param("ss", $name, $message);

$data = json_decode(file_get_contents('php://input'), true);
// sanitize function
// this is taken from the tools.in.php file, it will trim, make the special charactes, well, special characters, and get substrings;
$name = sanitize($data['name'], 50);
$message = sanitize($data['message'], 255);

// check that the statement is ready to be executed, don't want to run if their are no requests
if ($prepareStatement->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $prepareStatement->error]);
    exit();
}

if ($prepareStatement->error) {
    print_r($prepareStatement->error);
}


$prepareStatement->close();
echo json_encode(["success" => true]);
$mysqli->close();
exit();
