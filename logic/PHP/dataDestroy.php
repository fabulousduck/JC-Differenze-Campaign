<?php
include "../../config/PHPconfig.php";

$tid = $_POST['id'];

$q = "DELETE FROM Content WHERE id = ".$tid."";
$r = $mysqli->query($q);
header("Location:../../views/CMSindex.php");


?>