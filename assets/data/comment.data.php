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

    // trims data / html special characters.
    $name = sanitize($data['name'], 50);
    $message = sanitize($data['message'], 255);

    // this will stop from SQL injections

    $prepareStatement = $mysqli->prepare("INSERT INTO `Comments` (`Name`, `Message`) VALUES (?,?)");
    // two string vars
    $prepareStatement->bind_param("ss", $name, $message);

    // execute the query

    // Professor also helped me here during office hours, make sure that the only thing I send out is strictly JSON
    if ($prepareStatement->execute()) {
        echo json_encode(["success" => true], JSON_PRETTY_PRINT);
    } else {
        echo json_encode(["success" => false], JSON_PRETTY_PRINT);
    }

    $prepareStatement->close();

    exit();
}





$sql = "SELECT `Name`, `Message` FROM `Comments`";
if ($result = $mysqli->query($sql)) {

    $comments = $result->fetch_all(MYSQLI_ASSOC);
}
echo json_encode($comments, JSON_PRETTY_PRINT);
