<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'kacpe');
define('DB_PASS', 'BExvypEKWl26ex9c');
define('DB_NAME', 'feedbackApp');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection
if($conn->connect_error) {
    die('Connection Failde' . $conn->connect_error);
}

?>

