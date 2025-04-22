
<?php
include('./tools.inc.php');
require_once('./dbConn.php');
// Prepare the SQL statement to prevent PRofessor Snyder from trying to do a SQL injection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

$prepareStatement = $mysqli->prepare("INSERT INTO Comments (`Name`, `Message`) VALUES (?, ?)");
$prepareStatement->bind_param("ss", $name, $message);

$data = json_decode(file_get_contents('php://input'), true);
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
