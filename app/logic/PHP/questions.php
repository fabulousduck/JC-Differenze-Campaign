<?php
$mysqli = new mysqli("localhost", "duckofdoom", "koekje","duckofdoom_jc-db");

 if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno . "  " . $mysqli->connect_error;
}

// $question = $_GET['q'];

$query  = "SELECT * FROM questions";
$result = $mysqli->query($query);
$arra = array();
while($test = $result->fetch_assoc()){

   $arra[] = $test;

}
echo json_encode($arra);

?>
