<?php

// Create connection
$mysqli = mysqli_connect('localhost', 'bbw6934', 'Nonsignificant4+divided', 'bbw6934');
// Check connection
if (mysqli_connect_errno()) {
    echo 'connection failed: ' . mysqli_connect_error();
    exit();
} else {
    // echo 'connection good';
}
