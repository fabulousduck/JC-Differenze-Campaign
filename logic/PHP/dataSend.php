<?php
include "../../config/PHPconfig.php";


$contenttitle = $_POST['content_title'];
$content_ENG = $_POST['content_disp_ENG'];
$content_NED = $_POST['content_disp_NED'];
$content_ESP = $_POST['content_disp_ESP'];
$content_SRB = $_POST['content_disp_SRB'];
$text_align = $_POST['ta_disp'];
$font_size = $_POST['fs_disp'];
$partof = $_POST['Partof'];
$id = $_POST['id'];
$pageheader = $_POST['pageheader'];
$query = " UPDATE Content SET ContentTitle='".$contenttitle."', Content_ENG='".$content_ENG."', Content_NED='".$content_NED."',   Content_ESP='".$content_ESP."', Content_SRB='".$content_SRB."',  Text_align='".$text_align."', Font_size='".$font_size."' WHERE id = ".$id."";
$result = $mysqli->query($query);
var_dump($query);
var_dump($result);


// header("Location:views/CMSindex.php");

?>