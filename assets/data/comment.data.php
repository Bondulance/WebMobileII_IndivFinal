<?php
require_once("../inc/tools.inc.php");
require_once("../inc/dbConn.php");
header('Content-Type: application/json');

// My problem originally was not cleaning and ensuring data is JSON
$data = file_get_contents('php://input');
$data = json_decode($data, true);
$comments = [];



// add header to ensure it only sends out JSON

if (!empty($data) && isset($data['name']) && isset($data['message'])) {


    $name = sanitize($data['name'], 50);
    $message = sanitize($data['message'], 255);

    $prepareStatement = $mysqli->prepare("INSERT INTO `Comments` (`Name`, `Message`) VALUES (?,?)");
    $prepareStatement->bind_param("ss", $name, $message);

    // execute the query
    if ($prepareStatement->execute()) {
        echo json_encode(["success" => true], JSON_PRETTY_PRINT);
    } else {
        echo json_encode(["success" => false], JSON_PRETTY_PRINT);
    }

    $prepareStatement->close();

    exit();
}

// mutable var


// do sql statement but now you will have pretty JSON formatting
$sql = "SELECT `Name`, `Message` FROM `Comments`";
if ($result = $mysqli->query($sql)) {
    // fetchs all rows 
    $comments = $result->fetch_all(MYSQLI_ASSOC);
}
echo json_encode($comments, JSON_PRETTY_PRINT);
