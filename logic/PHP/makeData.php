<?php
include "../../config/PHPconfig.php";
// include "../../config/CMSConfig.php";
$partof = $_POST['po'];


$q = "INSERT INTO Content (ContentTitle, Content_ENG, Content_NED, Content_ESP, Content_SRB, Font_size, Partof) VALUES ('nav_btn_','content','content','contenido','садржина','14','".$partof."')";
$result = $mysqli->query($q);

// var_dump($q);
// var_dump($result);


header("Location:../../views/CMSindex.php");

?>