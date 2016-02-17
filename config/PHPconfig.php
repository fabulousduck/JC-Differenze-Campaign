<?php
$mysqli = new mysqli("localhost", "duckofdoom", "koekje", "duckofdoom_RemoSteps");


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: 
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>